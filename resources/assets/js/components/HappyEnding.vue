<template>
    <div class="happy_ending">
        <a href="#" class="happy_ending_wrap">
            <div class="happy_fig">
                <img :src="'/images/proj-thumb/' + project.file" class="lily_thumb">
                <p class="happy_fig_txt">{{ project.user.fullname }}</p>
            </div>
            <div class="proj_text">
                <h4 class="title">{{ project.title }}</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam repellendus autem at, omnis sit quia dolores perspiciatis inventore delectus repudiandae culpa pariatur rem dicta corporis commodi sunt quisquam. Soluta quaerat inventore error dolorem doloremque saepe excepturi illum eum tenetur, accusamus aut consequatur?</p>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        props: ['project']
    }
</script>

<style scoped>
   .happy_ending{
       transform: skewX(-6deg);
       border: 1px solid gainsboro;
       box-shadow: .5rem .5rem 1rem rgba(64, 64, 64, 0.27);
       /* padding: 3rem; */
       height: 21rem;
       border-radius: 2px;
       transition: all .6s;
    }
    .happy_ending:hover{
        border: 1px solid #d0d0d0;
        box-shadow: 1rem 1rem 2rem rgba(14,14,14,.27);
    }
    a.happy_ending_wrap{
        transform: skewX(6deg);
        height: 100%;
        padding: 0 3rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #3c3c3c;
        position: relative;
        transition: all .3s;
    }
    a.happy_ending_wrap:hover{
        text-decoration: none;
    }
    .happy_fig{
        margin-right: 1.5rem;
        position: relative;
        flex: 0 0 20%;
        transition: all .4s;
        height: 13.5rem;
        width: 13.5rem;
    }
    .happy_fig img{
        height: 100%;
        width: 100%;
        position: absolute;
        border-radius: 50%;
        border: 1px solid #dcdcdc;
        transition: all .4s;
    }
    .happy_fig .happy_fig_txt{
        font-size: 16px;
        font-weight: 300;
        color: orangered;
        position: absolute;
        top: 2rem;
        left: 2.5rem;
        visibility: hidden;
        opacity: 0;
        transition: all .4s .2s;
    }
    .happy_fig:hover img{
        opacity: .6;
        transform: scale(1.05);
    }
    .happy_fig:hover .happy_fig_txt{
        visibility: visible;
        opacity: 1;
        transform: translateY(4rem);
    }
    @media screen and (max-width: 945px){
         .happy_fig:hover .happy_fig_txt{
             transform: translateY(2.5rem);
         }
    }
     @media screen and (max-width: 932px){
         .proj_text h4{
             font-size: 17px;
         }
         .happy_fig:hover .happy_fig_txt{
             font-size: 14px;
         }
    }
    @media screen and (max-width: 748px){
         .proj_text h4{
             font-size: 16px;
         }
         .proj_text p{
             font-size: 13px;
         }
    }
     @media screen and (max-width: 692px){
         .happy_fig:hover .happy_fig_txt{
             transform: translateX(-1rem) translateY(2rem);
         }
     }
      @media screen and (max-width: 612px){
         .happy_fig{
             visibility: hidden;
             display: none;
             /* padding: 2rem; */
         }
    }
</style>

