<template>
    <div class="guarantees">
        <h2 class="text-center">Our guarantees</h2>
        <div class="guar_list">
            <div class="list">
                <div class="icon">
                    <svg class="svg_icon">
                        <use xlink:href="images/icons/sprite.svg#icon-briefcase1"></use>
                    </svg>
                </div>
                <div class="guar">
                    <h3 class="guar_title">Guarantee 1</h3>
                    <p class="guar_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consequatur amet praesentium eum neque Veritatis consequatur amet praesentium eum neque quod corrupti officiis nam, quaerat soluta.</p>
                </div>
            </div>
            <div class="list">
                <div class="icon">
                    <svg class="svg_icon">
                        <use xlink:href="images/icons/sprite.svg#icon-lock"></use>
                    </svg>
                </div>
                <div class="guar">
                    <h3 class="guar_title">Guarantee 1</h3>
                    <p class="guar_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consequatur Veritatis consequatur amet praesentium eum neque Veritatis consequatur amet praesentium eum neque amet praesentium eum neque quod corrupti officiis nam, quaerat soluta.</p>
                </div>
            </div>
            <div class="list">
               <div class="icon">
                    <svg class="svg_icon">
                        <use xlink:href="images/icons/sprite.svg#icon-handshake-o"></use>
                    </svg>
                </div>
                <div class="guar">
                    <h3 class="guar_title">Guarantee 1</h3>
                    <p class="guar_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consequatur amet praesentium eum neque quod Veritatis consequatur amet praesentium eum neque corrupti officiis nam, quaerat soluta.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    
}
</script>



<style scoped>
   .guarantees{
       /* height: 100vh; */
       width: 100%;
       min-height: 60rem;
       background-image: linear-gradient(to bottom right, rgba(13, 146, 91, 0.86), rgba(27, 249, 116, 0.87)), url(/images/guarantees.jpg);
       padding: 3rem;
       color: rgb(240, 240, 240);
   }
   .guarantees h2{
       font-size: 34px;
       font-weight: 300;
       margin-bottom: -2.5rem;
   }
   .guar_list{
       height: 100%;
       margin: 1rem 6rem;
       padding: .5rem 4rem;

       display: flex;
       flex-direction: column;
       align-items: space-between;
   }
  
   @media screen and (max-width:999px){
       .guar_list{
           margin: 1rem 3rem;
           padding: .5rem 2rem;
       }
   }
   .list{
       padding: 1.5rem 3rem;
       line-height: 1.6;
       min-height: 10rem;
       display: flex;
       justify-content: space-around;
       align-items: center;
   }
   .list .guar{
       color: #f7f7f7;
   }
   .guar .guar_title{
       font-size: 26px;
       font-weight: 300;
   }
   @media screen and (max-width: 768px){
       .guarantees h2{
           font-size: 32px;
       }
       .guar .guar_title{
           font-size: 24px;
       }
   }
   @media screen and (max-width: 648px){
       .list{
            padding: 1.5rem 2rem;
            line-height: 1.5;

            display: flex;
            flex-direction: column;
            /* justify-content: space-around; */
            /* align-items: center; */
        }
        .guar .guar_title{
           text-align: center;
       }
        .list .icon{
           margin-bottom: -1rem;
        }
   }
   .guar p{
       font-size: 16px;
       font-weight: 300;
   }
   .icon{
       margin-right: 4rem;
       margin-top: 1.7rem;
       /* align-self: center; */
   }
   .svg_icon{
       height: 8rem;
       width: 8rem;
       fill:#f7f7f7;
       /* color: #f3f3f3; */
   }
</style>

