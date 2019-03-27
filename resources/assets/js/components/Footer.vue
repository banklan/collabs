<template>
    <div class="footer">
        <div class="footer_top">
            <div class="footer_about footer_top_lists">
                <h3>About Collabs</h3>
                <ul class="footer_list">
                    <li class="footer_list_item"><a href="#">How it works</a></li>
                    <li class="footer_list_item"><a href="#">Pricing and fees</a></li>
                    <li class="footer_list_item"><a href="#">Top Fundraiser</a></li>
                    <li class="footer_list_item"><a href="#">Happy Endings</a></li>
                    <li class="footer_list_item"><a href="#">Sign Up</a></li>
                </ul>
            </div>
            <div class="footer_project footer_top_lists">
                <h3>Get familiar</h3>
                <ul class="footer_list">
                    <li class="footer_list_item"><a href="#">About Us</a></li>
                    <li class="footer_list_item"><a href="#">Volunteer / Patron</a></li>
                    <li class="footer_list_item"><a href="#">Volunteer / Patron</a></li>
                    <li class="footer_list_item"><a href="#">Campaign Tips</a></li>
                    <li class="footer_list_item"><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer_cat footer_top_lists">
                <h3>Top Categories</h3>
                <ul class="footer_list">
                    <li class="footer_list_item"><a href="#">Medical Fundraising</a></li>
                    <li class="footer_list_item"><a href="#">Charity Fundraising</a></li>
                    <li class="footer_list_item"><a href="#">Community Development</a></li>
                    <li class="footer_list_item"><a href="#">Social Responsibilty</a></li>
                    <li class="footer_list_item"><a href="#">Educational fundraising</a></li>
                </ul>
            </div>
            <div class="footer_contact footer_top_lists">
                <h3>Contact Us</h3>
                <ul class="footer_list">
                    <li class="footer_list_item"><i class="fa fa-phone"></i>  080222555352</li>
                    <li class="footer_list_item"><i class="fa fa-envelope"></i> info@collabs.com</li>
                </ul>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="terms footer_bottom_list">
                <span class="our_terms"><a href="#">Our Terms</a> </span>
                <span class="our_policy"><a href="#">Privacy Policy</a></span>
            </div>
            <div class="social footer_bottom_list">
                <a href="/facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="/twitter.com"><i class="fa fa-twitter"></i></a>
                <a href="/instagram.com"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="copyright footer_bottom_list">
                &copy; 2018 - {{ year }} &nbsp; Collabs.com &nbsp;&nbsp; All rights reserved
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            year: ''
        }
    },
    created() {
        this.year = new Date().getFullYear();
        console.log(new Date().getFullYear())
    },
}
</script>


<style scope>
    .footer{
        height: 36rem;
        background:  #242729;
        color: #49c2c7;
        /* color:#b3b3b3; */
        padding: 3rem;
        line-height: 2.2;
    }
    .footer_top{
        margin-bottom: 2rem;
        height: 88%;
        width: 100%;
        border-bottom: 1px solid #49c2c7;

        display: flex;
        justify-content: space-around;
        align-items: flex-start;
        flex-wrap: wrap;
    }
    .footer_top h3{
        font-size: 20px;
        font-weight: 300;
    }
    
    .footer_list{
        list-style: none;
        padding: 0;
    }
    .footer_list_item a{
        font-weight: 400;
        color: #49c2c7;
    }
    @media screen and (max-width: 768px){
        .footer_top h3{
            font-size: 1.8rem;
        }
        .footer_list_item a{
            font-weight: 300;
            font-size: 1.3rem;;
        }
    }
    .footer_list_item a:hover{
        color: #b5dffb;
        text-decoration: none;
    }
    @media screen and (max-width: 680px){
        .footer{
            height: 42rem;
        }
        .footer_top{
            display: flex;
            justify-content: space-between;
        }
        .footer_top_lists{
            flex-basis: 32%;
            margin-bottom: -1rem;
        }
    }
    .footer_bottom{
        color:  #49c2c7;
        width: 100%;

        display: flex;
        justify-content: space-between;
        align-content: center;
        flex-wrap: wrap;
    }
    .footer_bottom_list{
        flex-basis: 32%;
    }
    .footer_bottom a{
        color: #49c2c7;
    }
    .footer_bottom a:hover{
        color: #b5dffb;
        text-decoration: none;
    }
    .footer_bottom .terms{
        flex-basis: 35%;
        display: flex;
        justify-content: space-evenly;
    }
    .footer_bottom .social{
        flex-basis: 35%;
        display: flex;
        justify-content: center;
    }
    .social a{
        margin-right: 2.2rem;
    }
    .social .fa-facebook{
        color: #f7f7f7;
        border: 1px solid #3b5998;
        background: #3b5998;
        padding: .7rem 1rem;
        border-radius: 4px;
    }
    .social .fa-twitter{
        color: #f7f7f7;
        border: 1px solid #38a1f3;
        background: #38a1f3;
        padding: .7rem .8rem;
        border-radius: 4px;
    }
    .social .fa-instagram{
        color: #f7f7f7;
        background: #d6249f;
        background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285aeb 90%);
        box-shadow: 0px 3px 10px rgba(0,0,0,.25);
        padding: .8rem .9rem;
        border-radius: 4px;
    }
    .footer_bottom .copyright{
        flex-basis: 30%;
        display: flex;
        justify-content: space-around;
    }
      @media screen and (max-width: 680px){
          .footer_bottom{
              justify-content: space-around;
          }
           .footer_bottom .terms{
                flex-basis: 50%;
                justify-content: space-around;
           }
           .footer_bottom .social{
                flex-basis: 50%;
           }
           .footer_bottom .copyright{
                flex-basis: 50%;
                justify-content: space-between;
           }
      }

</style>