import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        newProject: {
            benef: '',
            categ: 0,
            amount: '',
            title: '',
            details: '',
            file: '',
            // expiry: ''
        },
        Project: []
    },
    getters:{
        getProj(state){
            return state.newProject
        },
        // getProject(state){
        //     return state.Project;
        // }
    },
    mutations:{
        addBenef(state, proj){
            state.newProject.benef = proj.benef;
            state.newProject.categ = proj.categ;
        },
        addProjDetails(state, proj){
            state.newProject.amount = proj.amount;
            state.newProject.title = proj.title;
            state.newProject.details = proj.details;
        },
        addFile(state, file){
            state.newProject.file = file
        },
        addExpiry(state, proj){
            // state.newProject.expiry = proj.expiry

            // axios.post('/create_fund_project', {
            //     benef: state.newProject.benef,
            //     proj_cat: state.newProject.categ,
            //     proj_type: 1,
            //     title: state.newProject.title,
            //     body: state.newProject.details,
            //     user_id: 1,
            //     campaign_goal: state.newProject.amount,
            //     raised: 0,
            //     expiry: state.newProject.expiry,
            // }).then((res) => {
            //     state.Project.push(res.data)
            // })
        }
    },
    actions:{
        // createFund(context,)
    }
})