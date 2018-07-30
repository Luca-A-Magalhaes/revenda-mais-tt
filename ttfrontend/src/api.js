import axios from 'axios'

// URL to access the TTBackend project
// update this url to match your TTBackend setup
const host = 'http://ttbackend/'

// Retrieve the tweets that match the provided query
export const ApiSearch = (query, store) => {
    // Send the request to the API
    const params = new URLSearchParams();
    params.append('query', query);
    axios.post(host+'index.php/api/search/', params)
    .then((response) => {
        // Fetch the data from the response
        return response.data
    })
    .then((data) => {
        // Dispatch the returned tweets to the store
        store.dispatch("setTweets", data);
    })
    // Log error
    .catch((err) => {
        console.log(err);
    });
}

// Retrieve the recent searched querys
export const ApiRecent = (store) => {
    // Send the request to the API
    axios.get(host+'index.php/api/recent/')
    .then((response) => {
        // Fetch the data from the response
        return response.data
    })
    .then((data) => {
        // Dispatch the returned querys to the store
        store.dispatch("setRecent", data);
    })
    .catch((err) => {
        // Log error
        console.log(err);
    });
}

// Retrieve the trending querys
export const ApiTrending = (store) => {
    // Send the request to the API
    axios.get(host+'index.php/api/trending/')
    .then((response) => {
        // Fetch the data from the response
        return response.data
    })
    .then((data) => {
        // Dispatch the returned querys to the store
        store.dispatch("setTrending", data);
    })
    .catch((err) => {
        // Log error
        console.log(err);
    });
}