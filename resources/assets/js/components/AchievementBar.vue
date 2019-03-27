<template>
    <div class="achievement_bar">
        <div class="prog_bar">
            <div :style="{ width: ach + '%'}" class="prog"></div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['project', 'ach'],
    data(){
        return{
            achieved: 0
        }
    },
    mounted(){
        if(this.project.raised == 0){
            // let raised = 0;
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
        // console.log(raised)
    }
}
</script>

<style scoped>
     .achievement_bar{
        margin-top: -20px;
    }
    .prog_bar{
        width: 17rem;
        background: #b7b6b6;
        height: .3rem;
        margin-bottom: 20px;
        position:relative;
    }
    .prog{
        height: .5rem;
        background: var(--col-pry-red);
        position: absolute;
        top: -1px;;
    }

</style>
