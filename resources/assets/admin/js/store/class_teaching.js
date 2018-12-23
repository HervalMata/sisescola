import {ClassStudent, ClassTeaching} from "../services/resources";
import Vue from 'vue';
import ADMIN_CONFIG from '../services/adminConfig';

const state = {
    teachings: []
}

const mutations = {
    set(state, teachings) {
        state.teachings = teachings;
    },
    add(state, teaching) {
        state.teachings.push(teaching);
    }
}

const actions = {
    query(context, classInformationId) {
        return Vue.http.get(`${ADMIN_CONFIG.ADMIN_URL}/class_informations/${classInformationId}/teachings`)
            .then(response => {
                context.commit('set', response.data);
            })
    },
    store(context, {teacherId, subjectId, classInformationId}) {
        return ClassTeaching.save({class_information: classInformationId}, {teacher_id: teacherId, subject_id: subjectId})
            .then(response => {
                context.commit('add', response.data);
            })
    },
    destroy(state, teachingId) {
        let index = state.teachings.findIndex((item) => {
            return item.id == teachingId;
        });
        if (index != -1) {
            state.teachings.splice(index, 1);
        }
    }
}

const module = {
    namespaced: true,
        state, mutations, actions
}

export default module;