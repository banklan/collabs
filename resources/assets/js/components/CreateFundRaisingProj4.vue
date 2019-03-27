<template>
     <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <top-bar :title="page_title"></top-bar>
                <div class="create_proj">
                    <div class="proj_form_contents">
                        <h3>What date do you want your campaign to expire?</h3>
                        <input class="create_input" type="date" name="expiry" v-model="proj.expiry" v-validate.disable="'required'" data-vv-as="expiry date">
                        <div v-show="errors.has('expiry')">
                            <div class="validation">
                                 {{ errors.first('expiry') }}
                            </div>
                        </div>
                        <div class="help_text">
                            <p>Please note that dates are entered in the format month/day/year</p>
                            <p>Use the calendar picker where available to pick a correct date</p>
                        </div>
                    </div>
                    <div class="proj_form_contents submit_span">
                        <h4>To enable us publish and share this campaign, you must accept our <a href="#">terms</a> and abide by our <a href="#">rules.</a> </h4>
                    </div>
                    <div class="accept_terms">
                        <label for="accept" class="control-label">
                            <input type="checkbox" id="accept" value="1" name="accept" v-model="proj.accepted" aria-label="..." v-validate.disable="'required'">
                        I accept</label>
                         <div v-show="errors.has('accept')">
                            <div class="validation">
                                 You must accept our rules to continue
                            </div>
                        </div>
                    </div>
                    <div class="help_text" style="padding:1rem 2.5rem;">
                        <ul class="rules_list">
                            <li class="rule_list_item">
                                That you are at least 18 years old.
                            </li>
                            <li class="rule_list_item">
                                That you will not use this app for fraudulent and malicious purposes. 
                            </li>
                            <li class="rule_list_item">
                                That your campaigns must be honest and clearly presented and must not be for a an illegal purpose/event. 
                            </li>
                            <li class="rule_list_item">
                                That campaigns are subject to approval before been published and can taken down, deleted or queried if need be. 
                            </li>
                            <li class="rule_list_item">
                                That you will abide by all our <a href="">terms</a> and <a href="">policies</a>. 
                            </li>
                        </ul>
                    </div>
                    <div class="proj_form_contents final_submit">
                        <button v-if="!submitted" class="submit_btn" @click="createProj">Submit</button>
                        <span v-if="submitted">
                            <img :src="'/images/loading.gif'" alt="Please wait.."> Please wait while we create your campaign...
                        </span>
                        <div v-show="failedCreate" class="validation">
                            Your campaign could not be created. Kindly try again
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</template>

<script>
    export default {
        data() {
            return {
                page_title: '',
                proj: {
                    expiry: '',
                    accepted: ''
                },
                todayDate: '',
                submitted: false,
                project: {
                    benef: '',
                    categ: '',
                    amount: '',
                    title: '',
                    details: '',
                    file: '',
                    expiry: ''
                },
                failedCreate: false
            }
        },
         computed: {
            getProj(){
                let proj = this.$store.getters.getProj
                this.project.benef = proj.benef;
                this.project.categ = proj.categ;
                this.project.amount = proj.amount;
                this.project.title = proj.title;
                this.project.details = proj.details;
                this.project.file = proj.file;

                // console.log(this.project)
            },
            getProject(){
                let project = this.$store.getters.getProj
                // console.log(project)
            }
        },
        methods: {
            createProj(){
                    // this.getProj
                 this.$validator.validateAll().then(() =>{
                    if(!this.errors.any()){
                        // this.submitted = true;
                        this.getProj; 
                        this.project.expiry = this.proj.expiry
                            // console.log(this.project)
                         const config = {headers: {
                          'Content-Type' : 'multipart/form-data',
                          }
                        };
                  
                        let vm = this; 

                        let form = new FormData();

                        let benef = vm.project.benef.trim();
                        let title = vm.project.title.trim();
                        let details = vm.project.details.trim();
                        let categ = vm.project.categ;
                        let amount = vm.project.amount.trim();
                        let expiry = vm.project.expiry;
                        let file = vm.project.file;

                        form.append('title', title)
                        form.append('details', details)
                        form.append('categ', categ)
                        form.append('amount', amount)
                        form.append('expiry', expiry)
                        form.append('benef', benef)
                        form.append('file', file)

                        axios.post('/create_fund_project', form, config).then((res) => {
                        	if(res.data){
                        		 console.log(res.data)
                                vm.$toasted.show('Your project has been create successfully!',
                                {
                                  type: 'success'
                                })
                        	}else{
                                this.failedCreate = true
                            }
                        })
                    }
                })
            }
        },
        mounted(){
            this.page_title = "Fundraising (4 of 4) - Rules" ;

            // let today = new Date().toLocaleDateString()
            // let date = new Date();
            // let mm = date.getMonth() + 1;
            // let dd = date.getDate() ;
            // let yyyy = date.getFullYear() ;

            // if(mm < 10){
            //     mm = '0' + mm.toString();
            // }

            // if(dd < 10){
            //     dd = '0' + dd.toString();
            // } 
            
            // let today = mm + '/' + dd + '/' + yyyy
            // this.todayDate = today
            // document.getElementById("tod").setAttribute('min', today);
            // console.log(today)
        }
    }
</script>

<style scoped>
    .submit_span{
        padding: 1.5rem;
    }
    .submit_span h4{
        line-height: 1.8;
        text-align: left;
    }
    .accept_terms{
        margin-top: -5rem;
        margin-left: 2rem;
    }
    .accept_terms input[type=checkbox]{
        margin-right: 5px;
        vertical-align: bottom;
        position: relative;
        top: -4px;
    }
    .help_text .rules_list{
        padding: 5px;
        line-height: 1.8;
    }
</style>
