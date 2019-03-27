<template>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-10 col-md-offset-1"> -->
                <div class="project_show">
                    <div class="project_head">
                        <div class="mini_menu">
                            <a href="">Edit</a>
                            <a href="">Update</a>
                            <a href="">Withdraw</a>
                            <a href="">Delete</a>
                        </div>
                        <div class="project_title">
                            <h3>{{ project.title }}</h3>
                        </div>
                    </div>
                    <div class="proj_content">
                        <div class="main_content">
                            <div class="media_wrapper">
                                <img :src="'/images/proj/' + project.file" class="project_img"/>
                            </div>
                            <div class="other_contents">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel harum laboriosam consequuntur fugiat accusamus assumenda nisi aliquam iste libero delectus!</p>
                            </div>
                        </div>
                        <div class="side_content">
                            <div class="proj_info">
                                <p class="muted">{{ user.fullname }} | {{ project.published_ago }} </p>
                                <p class="goal">Goal:&nbsp; &#8358;{{ project.formatted_goal }} </p>
                                <div class="progress_bar">
                                    <achievement-bar :project="project" :ach="achieved"></achievement-bar>
                                </div>
                                <p class="achieved">Raised:&nbsp; &#8358;{{ project.formatted_raised }} </p>
                                <p class="achieved">Contributors:&nbsp; 1000 </p>
                                <p class="expiry">{{ project.days_to_go }} days to expiry </p>
                                <button class="donate">Donate</button>
                                <div class="share_btns">
                                    <a href="/facebook.com" title="Share this campaign on facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" title="Like this campaign"><i class="fa fa-heart"></i></a>
                                    <a href="#" title="Report this campaign"><i class="fa fa-flag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
</template>

<script>
export default {
    data(){
        return{
            project: {},
            user: [],
            achieved: null
        }
    },
    watch: {
        
    },
    mounted(){
        let id = this.$route.params.id

        axios.get('/getfundraisingproject/' + id).then((res)=>{
            console.log(res.data)
            this.project = res.data
            this.user = res.data.user
            
            if(this.project.raised == 0){
                this.achieved = 0;
            }else{
                let raised = parseInt(this.project.raised) 
                let goal = parseInt(this.project.campaign_goal) 
                let achieved = raised/goal * 100;

                if(achieved > 100){
                    this.achieved = 100;
                }else{
                    this.achieved = (Math.round(achieved * 10)/10)
                }
            }
        })
    }
}
</script>

<style scoped>
    .project_show{
        box-sizing: border-box;
        width: 100%;
        padding: 2rem 9rem;
    }
    .mini_menu{
        margin-top: -5px;
        width: 40%;
        height: 4rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        /* background: #fff; */
    }
    .project_title{
        width: 80%;
        margin-top: -5px;
    }
    .proj_content{
        margin-top: 2rem;
        width: 100%;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .main_content{
        /* margin-right: 1.5rem; */
        flex: 0 1 70%;
        
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .side_content{
        flex: 0 1 30%;
    }
    .progress_bar{
        margin-top: 2rem;
    }
    .proj_info{
        height: 37rem;
        background: #fff;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .proj_info .goal{
        color: var(--col-pry-red);
        font-size: 1.8rem;
    }
    .donate{
        width: 90%;
        padding: .8rem 3rem;
        /* background-image: linear-gradient(to right, var(--col-pry-red), tomato); */
        background: var(--col-pry-red);
        border:1px solid var(--col-pry-red);
        border-radius: 3px;
        color: #f9f9f9;
        transition: all .4s;
    }
    .donate:hover{
        background: transparent;
        color: var(--col-pry-red);
        border:1px solid var(--col-pry-red);
        outline: none;
    }
    .donate:focus{
        outline: none;
    }
    .donate:active{
         box-shadow:  0rem 0rem 11px 7px rgba(240, 46, 46, 0.25);
         transform: translateY(3px);
         outline: none;
    }
    .share_btns{
        width: 60%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .share_btns .fa{
        font-size: 19px;
    }
     .share_btns .fa-facebook{
        color: #f7f7f7;
        border: 1px solid #3b5998;
        background: #3b5998;
        padding: .3rem .7rem;
        border-radius: 4px;
        transition: all .4s;
        font-size: 1.5rem;
    }
    
    .share_btns .fa-facebook:hover{
        color: #3b5998;
        border: 1px solid #3b5998;
        background: #f7f7f7;
    }
    .share_btns .fa-heart{
        color: #9a9a9a;
        transition: all .4s;
    }
    .share_btns .fa-heart:hover{
        color: var(--col-pry-red);
    }
     .share_btns .fa-flag{
         color: #9a9a9a;
         transition: transform .4s;
     }
     .share_btns .fa-flag:hover{
          color: var(--col-pry-red);
     }
</style>
