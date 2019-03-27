<template>
    <div class="services_cards">
        <div class="services_wrap">
            <div class="wrap-text">
                <h2 class="text-center">Start a fundraising campaign, find a patron...</h2>
            </div>
            <h2 class="subhead">..fulfill your dreams</h2>
            <div class="cards">
                <a href="" class="card_wrap">
                    <div class="card">
                        <div class="cardpix card_pic1">&nbsp;</div>
                        <div class="card_text">
                            <p>We understand how difficult it could be for start-ups... </p>
                            <p>so we are offering them a platform to achieve their dreams.</p> 
                        </div>
                    </div>
                </a>
                <a href="" class="card_wrap">
                    <div class="card">
                        <div class="cardpix card_pic2">&nbsp;</div>
                        <div class="card_text">
                            <p>We know your appeals could save a dying soul... </p>
                            <p>And it's why we are throwing in all we have to help you achieve your targets.</p>
                        </div>
                    </div>
                </a>
                <a href="" class="card_wrap">
                    <div class="card">
                        <div class="cardpix card_pic3">&nbsp;</div>
                        <div class="card_text">
                            <p>We connect you to volunteers...</p>
                            <p>Just start your campaign and fill the details of your requirements.</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</template>

<style scoped>
    .services_cards{
        padding: 3rem 4rem;
        margin-top: 2rem;
        /* height: 100vh; */
        color: #4d4d4d;
        box-sizing: border-box;
        overflow:hidden;
    }
    .wrap-text h2{
        text-align: center;
    }
    .services_wrap{
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .services_wrap h2:first-child{
        background-image: linear-gradient(to right, #077409ec, rgba(236, 59, 55));
        font-weight: 700;
        display: inline-block;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size:30px
    }
    .services_wrap > h2{
        font-size: 25px;
    }
    .services_wrap h2.subhead{
        color: var(--home-subhead)
    }
    .cards{
        margin-top: 2rem;
        width: 80%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-wrap: wrap;
    }
    .card_wrap{
        flex: 0 1 24%;
        height: 28rem;
        border:1px solid #e4e3e3;
        border-radius: 4px;
        box-shadow: .3rem .3rem 2rem rgba(0, 0, 0, .3);
        overflow: hidden;
        transition: all .4s;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        position: relative;
        box-sizing: border-box;
        padding-bottom: 2rem;
    }
    @media screen and (max-width: 1254px){
        .card_wrap{
            flex: 0 0 25%;
            height: 30rem;
        }
    }
    @media screen and (max-width: 1093px){
        .cards{
            width: 85%;
        }
        .card_wrap{
            flex: 0 0 28%;
            height: 30rem;
        }
    }
   @media screen and (max-width: 934px){
        .cards{
            width: 90%;
        }
        .card_wrap{
            flex: 0 0 30%;
        }
   }
    @media screen and (max-width: 836px){
        .cards{
            width: 85%;
        }
        .card_wrap{
            flex: 0 0 44%;
            height: 28rem;
            margin-bottom: 3rem;
        }
    }
     @media screen and (max-width: 691px){
         .card_wrap{
            flex: 0 0 60%;
            height: 30rem;
        }
     }
    .cards .card{
        height: 100%;
        
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all .6s;
    }
    .card_wrap:hover{
        box-shadow: 1rem 1rem 2rem rgba(0, 0, 0, .6);
    }
    .card_wrap:hover .card{
        transform: translateY(-7.5rem);
    }
    .card_wrap .cardpix{
        background-size: cover;
        height: 20rem;
        transition: all .6s;
    }
    .card_wrap:hover .cardpix{
        opacity: .4;
        transform: scale(1.1);
    }
    .card_wrap .card_text{
        text-align: center;
        color: #4d4d4d;
        font-weight: 400;
        line-height: 1.5;
        font-size: 16px;
        padding: 1rem .7rem;
        position: absolute;
        top: 21rem;
    }
    
    
</style>

