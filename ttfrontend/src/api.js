import axios from 'axios'

export const ApiSearch = (query, store) => {
    const params = new URLSearchParams();
    params.append('query', query);
    axios.post('http://ttbackend/index.php/api/search/', params)
    .then((response) => {
        return response.data
    })
    .then((data) => {
        store.dispatch("setTweets", data);
    })
    .catch((err) => {
        console.log(err);
    });
}

export const ApiRecent = (store) => {
    axios.get('http://ttbackend/index.php/api/recent/')
    .then((response) => {
        return response.data
    })
    .then((data) => {
        store.dispatch("setRecent", data);
    })
    .catch((err) => {
        console.log(err);
    });
}

export const ApiTrending = (store) => {
    axios.get('http://ttbackend/index.php/api/trending/')
    .then((response) => {
        return response.data
    })
    .then((data) => {
        store.dispatch("setTrending", data);
    })
    .catch((err) => {
        console.log(err);
    });
}