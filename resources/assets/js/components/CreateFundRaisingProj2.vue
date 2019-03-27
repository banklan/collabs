<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <top-bar :title="page_title"></top-bar>
                <div class="create_proj">
                    <div class="proj_form_contents">
                        <h3 class="text-center">How much are you soliciting for?</h3>
                        <div class="input-group" id="amount_inp">
                            <span class="input-group-addon" id="sizing-addon1">&#8358;</span>
                            <input type="text" class="form-control" name="amount" v-model="proj.amount" id="amount_input" v-validate="'required|decimal:2|min_value:1'" placeholder="Type amount without comma" aria-describedby="sizing-addon1">
                        </div>
                        <div v-show="errors.has('amount')">
                            <div class="validation">
                                 {{ errors.first('amount') }}
                            </div>
                        </div>
                    </div>
                    <div class="proj_form_contents">
                        <h3 class="text-center">Title of your campaign</h3>
                        <textarea class="create_textarea" name="title" rows="2" v-model="proj.title" placeholder="Not more than 120 characters" v-validate="'required|min:5|max:120'"></textarea>
                        <div v-show="errors.has('title')">
                            <div class="validation">
                                 {{ errors.first('title') }}
                            </div>
                        </div>
                    </div>
                    <div class="proj_form_contents">
                        <h3 class="text-center">Details of your campaign</h3>
                        <textarea class="create_textarea" name="details" rows="4" v-model="proj.details" placeholder="Not more than 900 characters" v-validate="'required|min:20|max:900'"></textarea>
                        <div v-show="errors.has('details')">
                            <div class="validation">
                                 {{ errors.first('details') }}
                            </div>
                        </div>
                        <span class="help_text">
                            Details should include how the fund will be used 
                        </span>
                    </div>
                    <div class="next_btn">
                        <button class="next" @click="goNext">Next</button>
                        <!-- <router-link :to="{name: 'CreateFundraising3'}" class="next">Next</router-link> -->
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
                    amount: '',
                    title: '',
                    details: ''
                }
            }
        },
        computed: {
            getProj(){
                let proj = this.$store.getters.getProj
                console.log(proj)
            }
        },
        methods: {
            goNext(){
                this.$validator.validateAll().then(() =>{
                    if(!this.errors.any()){
                        this.$store.commit('addProjDetails', this.proj); 
                        this.$router.push({name: 'CreateFundraising3'})
                        // this.getProj
                    }
                })
            }
        },
        mounted(){
            this.page_title = "Fundraising (2 of 4)" 
            // console.log(this.$store.getters.getProj)
        }
    }
</script>

<style scoped>
    #amount_inp input[type=text]{
        height: 4.2rem;
    }
    
</style>
