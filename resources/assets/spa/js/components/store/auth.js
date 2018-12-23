import JwtToken from "../services/jwt-token";

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
        return JwtToken.accessToken(username, password);
    },
    logout() {
        return JwtToken.logout();
    }
};

const modules ={
    namespaced: true,
    state, mutations, actions
};

export default module;