<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <top-bar :title="page_title"></top-bar>
                <div class="create_proj">
                    <div class="proj_form_contents">
                        <h3 class="text-center">Didn't they say a picture is worth a thousand words?</h3>
                        <button class="btn btn-default">
                            <input type="file" name="file" ref="file" accept="image/*" @change="chooseFile" v-validate="'required|mimes:image/*,video/mp4,video/wav'">
                        </button>
                        <div v-show="errors.has('file')">
                            <div class="validation">
                                {{ errors.first('file') }}
                            </div>
                        </div>
                        <span v-if="!previewFile" class="help_text">
                            Add a high quality picture or video to tell your story better 
                        </span>
                        <span v-if="previewFile" class="file_prev">
                           <p>{{ file.name }}</p>
                           <img v-bind:ref="'image/'" />
                           <i class="fa fa-trash" @click="removePic"></i>
                        </span>
                    </div>
                    <div class="next_btn">
                        <button class="next" @click="goNext">Next</button>
                        <!-- <router-link :to="{name: 'CreateFundraising4'}" class="next">Next</router-link> -->
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
                // review: false,
                previewFile: false,
                file: ''
            }
        },
        methods: {
            chooseFile(e){
        		this.previewFile = true
                this.file = e.target.files[0]

                let reader = new FileReader();
                reader.readAsDataURL(this.file)
                // if(this.file !== ''){
                //     reader.addEventListener('load', function(){
                //         this.$refs['image'].src = reader.result;
                //     }.bind(this), false);
                // }
                // console.log(reader)
        	},
        	
            removePic(){
                this.file = ''
                this.previewFile = false
                // this.pictures.splice(index, 1)
            },
            goNext(){
                 this.$validator.validateAll().then(() =>{
                    if(!this.errors.any()){
                        this.$store.commit('addFile', this.file);
                        this.$router.push({name: 'CreateFundraising4'})
                        // this.getProj
                    }
                 })
            }
        },
        computed: {
            getProj(){
                let proj = this.$store.getters.getProj
                // console.log(proj)
            }
        },
        mounted(){
            this.page_title = "Fundraising (3 of 4)" 
        }
    }
</script>

<style scoped>
   .file_prev{
       margin-top: .7rem;
       display: flex;
       justify-content: space-between;
       align-items: center;
       margin-bottom: -3rem;
       /* flex-wrap: wrap; */
   }
   .file_prev .fa{
       margin-left: 5rem;
       margin-top: -1.1rem;
       color: var(--col-pry-red);
       font-size: 1.6rem;
       cursor: pointer;
   }
   .proj_form_contents h4{
       margin-bottom: 2.5rem;
   }
</style>
