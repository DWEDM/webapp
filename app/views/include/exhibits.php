<style>
    .exhibit-container .card {
    position: relative;
    width: 250px;
    height: 400px;
    color: #2e2d31;
    background: #131313;
    overflow: hidden;
    border-style: solid;
    border-color: #f2c649;

    margin-top: 3%;
    }

    .temporary_text {
    font-weight: bold;
    font-size: 24px;
    padding: 0;
    color: #f8f8f8;
    }

    .card_title {
    font-weight: bold;
    }

    .card_content {
    position: absolute;
    left: 0;
    bottom: 0;
        /* edit the width to fit card */
    width: 100%;
    padding: 20px;
    background: #f2f2f2;
    border-top-left-radius: 20px;
        /* edit here to change the height of the content box */
    transform: translateY(150px);
    transition: transform .25s;
    }

    .card_content::before {
    content: '';
    position: absolute;
    top: -47px;
    right: -45px;
    width: 100px;
    height: 100px;
    transform: rotate(-175deg);
    border-radius: 50%;
    box-shadow: inset 48px 48px #f2f2f2;
    }

    .card_title {
    color: #131313;
    line-height: 15px;
    }

    .card_subtitle {
    display: block;
    font-size: 12px;
    margin-bottom: 10px;
    }

    .card_description {
    font-size: 14px;
    opacity: 0;
    transition: opacity .5s;
    }

    .card:hover .card_content {
    transform: translateY(0);
    }

    .card:hover .card_description {
    opacity: 1;
    transition-delay: .25s;
    }
    .card_content button{
        border: none;
        background-color: #f2c649;
        color: rgb(31, 31, 31);
        padding: 5px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .temporary_text img{
        width: auto;
        height: 100%;
        position: center;

        overflow: hidden;
        transform: scale(2);
        padding-top: 35px;
    }
    .card:hover .temporary_text img{
        transition: 0.5s;
        filter: blur(5px);
    }
</style>






<div class="news-container exhibit-container hidden">

    <article class="card">
        <div class="temporary_text">
            <img src="../resources/museum/museum_foundation_ph.png" alt="">
        </div>

        <div class="card_content" style="padding-top: 10vh;">
            <span class="card_title">National Museum of Fine Arts</span>
                <span class="card_subtitle">Sulyap Museo: A Virtual Tour of Philippine Museums</span>
                <p class="card_description">Sulyap Museo: A 360° virtual tour of Philippines Museums. A project of the museum Foundation of the Philippines, Inc.<br>produced by: www.firefly.ph</p>
                
                <a href="https://museumfoundationph.org/sulyapmuseo/national-museum-of-fine-arts/?fbclid=IwAR3ccumKK06rWUNXbAamfzx4QoM1Kln2KUE9q7g6Bq88Kuu2w3sGNQLUVvk" target="_blank">
                    <button>
                        Redirect
                    </button>
                </a>
        </div>
    </article>

    <article class="card">
        <div class="temporary_text">
            <img src="../resources/museum/mindmuseum.jpg" alt="">
        </div>

        <div class="card_content" style="padding-top: 10vh;">
            <span class="card_title">The Mind Museum</span>
                <span class="card_subtitle">Science comes alive!</span>
                <p class="card_description" style="padding-top: 100px;">I don't know T_T</p>
                
                <a href="https://www.themindmuseum.org/" target="_blank">
                    <button>
                        Redirect
                    </button>
                </a>
        </div>
    </article>

    <article class="card">
        <div class="temporary_text">
            <img src="../resources/museum/yuchengco.png" alt="">
        </div>

        <div class="card_content" style="padding-top: 10vh;">
            <span class="card_title">Yuchengco Museum Inc.</span>
                <span class="card_subtitle"></span>
                <p class="card_description" style="padding-top: 120px;">e g g</p>
                
                <a href="https://museumfoundationph.org/sulyapmuseo/national-museum-of-fine-arts/?fbclid=IwAR3ccumKK06rWUNXbAamfzx4QoM1Kln2KUE9q7g6Bq88Kuu2w3sGNQLUVvk" target="_blank">
                    <button>
                        Redirect
                    </button>
                </a>
        </div>
    </article>

    <article class="card">
        <div class="temporary_text">
            <img src="../resources/museum/pinto.png" alt="">
        </div>

        <div class="card_content" style="padding-top: 10vh;">
            <span class="card_title">Pinto International</span>
                <span class="card_subtitle">Your door to Filipino contemporary art</span>
                <p class="card_description" style="padding-top: 130px;"></p>
                
                <a href="https://www.pintoart.org/exhibitions/" target="_blank">
                    <button>
                        Redirect
                    </button>
                </a>
        </div>
    </article>
    
</div>