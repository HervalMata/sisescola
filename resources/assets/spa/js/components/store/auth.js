import {Jwt} from "../services/resources";

const state = {
    user: null,
    check: null
};

const mutations = {
    authenticated(state) {

    },
    unauthenticated(state) {

    }
};

const actions = {
    login(username, password) {
        return Jwt.accessToken(username, password);
    },
    logout() {
        return Jwt.logout();
    }
};

const modules ={
    namespaced: true,
    state, mutations, actions
};

export default module;