<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <top-bar :title="page_title"></top-bar>
                <div class="create_proj">
                    <div class="proj_form">
                        <div class="proj_form_contents">
                            <h3 class="text-center">Who are you raising fund for?</h3>
                            <select class="create_input text-center" name="beneficiary" v-model="whoFor"  @change="chooseBenef()" v-validate.disable="'required'">
                                <option value="" selected class="muted">Choose recepient</option>
                                <option value="0" >Myself</option>
                                <option value="1" >For an Individual</option>
                                <option value="2" >For a group</option>
                            </select>
                            <div v-show="errors.has('beneficiary')">
                                <div class="validation">
                                    {{ errors.first('beneficiary') }}
                                </div>
                            </div>
                            <input v-if="anotherBenef" type="text" name="fullname" class="create_input" v-model="proj.benef" placeholder="Full Names of Beneficiary" v-validate.disable="'required|max:70'">
                            <div v-show="errors.has('fullname')">
                                <div class="validation">
                                    {{ errors.first('fullname') }}
                                </div>
                            </div>
                        </div>
                        <div class="proj_form_contents">
                            <h3 class="text-center">Choose a category</h3>
                            <select class="create_input text-center" v-model="proj.categ" name="category" v-validate.disable="'required'">
                                <option value="" selected class="muted">Pick the category of campaign</option>
                                <option v-for="cat in cats" :key="cat.id" :value="cat.id" class="options">{{ cat.category }}</option>
                            </select>
                            <div v-show="errors.has('category')">
                                <div class="validation">
                                    {{ errors.first('category') }}
                                </div>
                            </div>
                        </div>
                        <div class="next_btn">
                            <button class="next" @click="goNext">Next</button>
                            <!-- <span v-if="clicked">Please wait...</span> -->
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
            whoFor: '',
            proj:{
                benef: '',
                categ: ''
            },
            anotherBenef: false,
            cats: [],
        }
    },
    methods: {
       chooseBenef(){
           if(this.whoFor == '0'){
               this.anotherBenef = false
               this.proj.benef = "self"
           }else{
              this.anotherBenef = true
              this.proj.benef = '' 
           }
        },
        goNext(){
            this.$validator.validateAll().then(() =>{
                if(!this.errors.any()){
                    this.$store.commit('addBenef', this.proj); 
                    this.$router.push({name: 'CreateFundraising2'})
                }
            })
        }
    },
    mounted(){
        this.page_title = "Fundraising"

        axios.get('/get_proj_cats').then((res) => {
            this.cats = res.data;
        })
    }
}
</script>

<style scoped>
    .proj_form_contents input[type=text]{
        margin-top: 2rem;
    }
    
</style>
