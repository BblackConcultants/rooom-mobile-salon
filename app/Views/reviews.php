<style type="text/css">
    *{
    margin: 0px;
    padding: 0px;
    font-family: poppins;
    box-sizing: border-box;
    }
    a{
        text-decoration: none;
    }
    #testimonials{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width:100%;
    }
    .testimonial-heading{
        letter-spacing: 1px;
        margin: 30px 0px;
        padding: 10px 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
     
    .testimonial-heading span{
        font-size: 1.3rem;
        color: #252525;
        margin-bottom: 10px;
        letter-spacing: 2px;
        text-transform: uppercase;
    }
    .testimonial-box-container{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width:100%;
    }
    .testimonial-box{
        width:500px;
        box-shadow: 2px 2px 30px rgba(0,0,0,0.1);
        background-color: #ffffff;
        padding: 20px;
        margin: 15px;
        cursor: pointer;
    }
    .profile-img{
        width:50px;
        height: 50px;
        border-radius: 50%;
        overflow: hidden;
/*        margin-right: 10px;*/
    }
    .profile-img img{
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    .profile{
        display: flex;
        align-items: center;
    }
    .name-user{
        display: flex;
        flex-direction: column;
    }
    .name-user strong{
        color: #3d3d3d;
        font-size: 1.1rem;
        letter-spacing: 0.5px;
    }
    .name-user span{
        color: #979797;
        font-size: 0.8rem;
    }
    .reviews{
        color: #f9d71c;
    }
    .box-top{
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    .client-comment p{
        font-size: 0.9rem;
        color: #4b4b4b;
    }
    .testimonial-box:hover{
        transform: translateY(-10px);
        transition: all ease 0.3s;
    }
     
    @media(max-width:1060px){
        .testimonial-box{
            width:45%;
            padding: 10px;
        }
    }
    @media(max-width:790px){
        .testimonial-box{
            width:100%;
        }
        .testimonial-heading h1{
            font-size: 1.4rem;
        }
    }
    @media(max-width:340px){
        .box-top{
            flex-wrap: wrap;
            margin-bottom: 10px;
        }
        .reviews{
            margin-top: 10px;
        }
    }
    ::selection{
        color: #ffffff;
        background-color: #252525;
    }
</style>
<section id="testimonials" style="margin-bottom: 120px;">
        <!--heading--->
        <div class="col-md-10 heading-section text-center ftco-animate"  style="margin-top: 120px;">
            <span class="subheading">Client Reviews</span>
            <h2 class="mb-4">What our clients say</h2>
            <p>Don’t take our word for it; hear what other customers have to say about our mobile salon services.</p>
        </div>
        <!--testimonials-box-container------>
        <div class="testimonial-box-container">
            <!--BOX-1-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Liam mendes</strong>
                            <span>@liammendes</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-2-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Noah Wood</strong>
                            <span>@noahwood</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-3-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Oliver Queen</strong>
                            <span>@oliverqueen</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
            <!--BOX-4-------------->
            <div class="testimonial-box">
                <!--top------------------------->
                <div class="box-top">
                    <!--profile----->
                    <div class="profile">
                        <!--img---->
                        <div class="profile-img">
                            <img src="https://cdn3.iconfinder.com/data/icons/avatars-15/64/_Ninja-2-512.png" />
                        </div>
                        <!--name-and-username-->
                        <div class="name-user">
                            <strong>Barry Allen</strong>
                            <span>@barryallen</span>
                        </div>
                    </div>
                    <!--reviews------>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i><!--Empty star-->
                    </div>
                </div>
                <!--Comments---------------------------------------->
                <div class="client-comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quaerat quis? Provident temporibus architecto asperiores nobis maiores nisi a. Quae doloribus ipsum aliquam tenetur voluptates incidunt blanditiis sed atque cumque.</p>
                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom: 20px;">
            <a href="#book-now" class="btn btn-primary show-modal" style="padding-left: 30px; padding-right: 30px;">Book Now</a>
        </div>
      </section>