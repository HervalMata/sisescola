import {Jwt, jwt} from './resources';
import LocalStorage from './localstorage';

const payloadToObject = (token) => {
    let payload = token.split('.')[1];
    return JSON.parse(atob(payload));
}

export default {
    get token() {
        return LocalStorage.get();
    },
    set token(value) {
        LocalStorage.set('token', value);
    },
    accessToken(username, password) {
        return Jwt.accessToken(username, password)
            then((response) => {
                this.token = response.data.token;
            })
    },
    revokeToken() {

    }
};