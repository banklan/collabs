
import Welcome from './components/Welcome.vue';
import CreateProject from './components/CreateProject.vue';
import CreateFundRaisingProj from './components/CreateFundRaisingProj.vue';
import CreateVolunteerProj from './components/CreateVolunteerProj.vue';
import CreatePatronProj from './components/CreatePatronProj.vue';
import CreateFundRaisingProj2 from './components/CreateFundRaisingProj2.vue';
import CreateFundRaisingProj3 from './components/CreateFundRaisingProj3.vue';
import CreateFundRaisingProj4 from './components/CreateFundRaisingProj4.vue';
import FundRaisingProject from './components/FundRaisingProject.vue';

export default[
    {path: '/', component: Welcome, props: true},
    {path: '/create_project', component: CreateProject},
    {path: '/create_project/fundraising', name: 'CreateFundraising', component: CreateFundRaisingProj},
    {path: '/create_project/fundraising2', name: 'CreateFundraising2', component: CreateFundRaisingProj2},
    {path: '/create_project/fundraising3', name: 'CreateFundraising3', component: CreateFundRaisingProj3},
    {path: '/create_project/fundraising4', name: 'CreateFundraising4', component: CreateFundRaisingProj4},
    {path: '/fundraising_project/:id/:slug', name: 'FundRaisingProject', component: FundRaisingProject, props:true},
    {path: '/create_project/volunteer', name: 'CreateVolunteer', component: CreateVolunteerProj},
    {path: '/create_project/patron', name: 'CreatePatron', component: CreatePatronProj},
]