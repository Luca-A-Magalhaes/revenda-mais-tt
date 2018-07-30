<?php
class ApiController extends Controller
{
    /**
     * Action to search tweets with the provided query
     * @param query: String with the new query
     * @return: Array with found tweets
     */
    public function actionSearch()
    {
        // Check if query was informed
        if(!isset($_POST['query'])){
            $error = array('error' => 'Query not informed');
            $this->_sendResponse(400, CJSON::encode($error));
        }
        // Check if the query was already searched
        $searched = $_POST['query'];
        $query = Query::model()->find("query = :searched", array(':searched' => $searched));
        // If not, save the new query searched
        if(is_null($query)){
            $new_query = new Query;
            $new_query->query = $searched;
            $new_query->trending = 0;
            $new_query->date = date("Y-m-d H:i:s");
            $new_query->save();
        }
        // Searches tweets containing the query inside their message
        $searched = addcslashes($searched, '%_');
        $tweets = Tweet::model()->findAll("text LIKE :searched", array(':searched' => "%$searched%"));
        $payload = array();
        // Convert found tweets to serializable objects
        foreach($tweets as $tweet){
            $payload[] = $tweet->attributes;
        }
        $this->_sendResponse(200, CJSON::encode($payload));
    }

    /**
     * Action to retrieve Trending querys
     * @return: Array with found querys
     */
    public function actionTrending()
    {
        $querys = Query::model()->trending()->findAll();
        $payload = array();
        // Convert found tweets to serializable objects
        foreach($querys as $query){
            $payload[] = $query->attributes;
        }
        $this->_sendResponse(200, CJSON::encode($payload));
    }

    /**
     * Action to retrieve Recent searched querys
     * @return: Array with lastest 5 querys searched
     */
    public function actionRecent()
    {
        $querys = Query::model()->recently()->findAll();
        $payload = array();
        // Convert found tweets to serializable objects
        foreach($querys as $query){
            $payload[] = $query->attributes;
        }
        $this->_sendResponse(200, CJSON::encode($payload));
    }

    /**
     * Function to send the response
     * @param status: Number to the status code
     * @param body: Array with the content to be sent
     */
    private function _sendResponse($status, $body)
    {
        // Set the response headers
        $status_header = 'HTTP/1.1 ' . $status . ' ' . $this->_getStatusCodeMessage($status);
        header($status_header);
        header('Content-type: application/json');
        // Print the content to the response body
        echo $body;
        Yii::app()->end();
    }

    /**
     * Function to retrieve the status code from number
     * @param status: Status number
     * @return: Status code
     */
    private function _getStatusCodeMessage($status)
    {
        // Dictionary to map status numbers and codes
        $codes = Array(
            200 => 'OK',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            402 => 'Payment Required',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
        );
        return (isset($codes[$status])) ? $codes[$status] : '';
    }
}
