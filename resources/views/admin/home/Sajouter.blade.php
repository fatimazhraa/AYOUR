<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
   
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">




<style>

.ajouter{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  margin-left:20%;
}
.ajouter .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.ajouter .title::before{
  content: "";
  position: absolute;
  left: 20%;
  bottom: 0;
  height: 3px;
  width: 80px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #c1a8ca);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .ajouter{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .ajouter .content .category{
    flex-direction: column;
  }
}
.user-details .input-box textarea {
  height: 120px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding: 10px 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}

.user-details .input-box textarea:focus,
.user-details .input-box textarea:valid {
  border-color: #9b59b6;
}
.centered {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 8vh;
    text-align: center;
}

</style>




  </head>
  <body>

<div class="ajouter">
        @if(Session::has('success_message'))
                   <div class="alert alert-success centered">
                       {{ Session::get('success_message') }}
                   </div>
        @endif

        @if(Session::has('error_message'))
                   <div class="alert alert-danger centered">
                       {{ Session::get('error_message') }}
                   </div>
        @endif

          <div class="title">Registration</div>

          <div class="content">

            <form action="{{route('store.service')}}" method="post">
                @csrf
                <div class="user-details">

                    <div class="input-box">
                          <span class="details">IMAGE carte</span>
                          <input type="text" name="imgcarte" placeholder="Entrez nom img " required>
                    </div>
                   <div class="input-box">
                          <span class="details">Titre carte</span>
                          <input type="text" name="titrecarte"  placeholder="Entrez le titre de carte" required>
                   </div>
                   <div class="input-box">
                          <span class="details">Description </span>
                          <textarea name="desccarte" placeholder="Entrez description" required></textarea>
                   </div>
                   <div class="input-box">
                          <span class="details">Grand titre</span>
                          <input type="text" name="grandtitre" placeholder="Entrez le grand titre" required>
                   </div>
                   <div class="input-box">
                          <span class="details">Image detaille</span>
                          <input type="text" name="imgdetaille" placeholder="Saisissez nom d'image" required>
                   </div>
                   <div class="input-box">
                          <span class="details"> Titre detaille</span>
                          <input type="text" name="titredetaille" placeholder="Entrez titre" required>
                   </div>
                   <div class="input-box">
                          <span class="details">Description detaille</span>
                          <textarea name="descdetaille" placeholder="Saisissez une description" required></textarea>
                   </div>
                  <div class="button">
                          <input type="submit" value="Enregistrer">
                  </div>
                </div>


            </form>
          </div>
</div>






</body>
</html>