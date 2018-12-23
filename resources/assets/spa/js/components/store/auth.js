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
    login() {

    },
    logout() {

    }
};

const modules ={
    namespaced: true,
    state, mutations, actions
};

export default module;