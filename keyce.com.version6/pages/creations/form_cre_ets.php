 <html>
<head>
<title>Etudiant</title>
<link rel="icon"href="../../images/etudianticone.png">
<style>



body{
  margin: 0;
  padding: 0;
  background-image: url("../../images/ciel bleu blanc (1).jpg");
}


.optionbox{

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
.optionbox select {
    background: black;
    color: #fff;
    padding: 10px;
    width: 250px;
    height: 50px;
    border: none;
    font-size: 20px;
    box-shadow: 0 5px 48px rgb(93, 15, 9);
    -webkit-appearance: button;
    outline: none;
}




a{
    position: relative;
    display: inline-block;
    padding: 25px 30px;
    margin: 40px 0;
    color: blue;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 50px;
}
a:hover{
    background: #03e9f4;
    color: #050801;
    box-shadow: 0 0 5px blue,
                0 0 25px blue,
                0 0 50px blue,
                0 0 200px blue;
     -webkit-box-reflect:below 1px linear-gradient(transparent, #0005);
}
a:nth-child(1){
    filter: hue-rotate(270deg);
}
a:nth-child(2){
    filter: hue-rotate(110deg);
}
a span{
    position: absolute;
    display: block;
}
a span:nth-child(1){
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#03e9f4);
    animation: animate1 1s linear infinite;
}
@keyframes animate1{
    0%{
        left: -100%;
    }
    50%,100%{
        left: 100%;
    }
}
a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#03e9f4);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}
@keyframes animate2{
    0%{
        top: -100%;
    }
    50%,100%{
        top: 100%;
    }
}
a span:nth-child(3){
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#03e9f4);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}
@keyframes animate3{
    0%{
        right: -100%;
    }
    50%,100%{
        right: 100%;
    }
}
a span:nth-child(4){
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#03e9f4);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}
@keyframes animate4{
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom: 100%;
    }
}  
.button_creer{
  position: relative;
  display: inline-block;
  cursor: pointer;
  outline: none;
  border: 7;
  vertical-align: middle;
  text-decoration: none;
  font-size: inherit;
  font-family: inherit;
  background-color: inherit;
  margin-left: 35%;
  size: 25%;
  &.learn-more {
    font-weight: 600;
    color: $text;
    text-transform: uppercase;
    padding: 1.25em 2em;
    background: $light-pink;
    border: 2px solid $pink-border;
    border-radius: 0.75em;
    transform-style: preserve-3d;
    transition: transform 150ms cubic-bezier(0, 0, 0.58, 1),
     background 150ms cubic-bezier(0, 0, 0.58, 1);
    &::before {
      position: absolute;
      content: '';
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: $dark-pink;
      border-radius: inherit;
      box-shadow: 0 0 0 2px $pink-border, 0 0.625em 0 0 $pink-shadow;
      transform: translate3d(0, 0.75em, -1em);
      transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
    }
    &:hover {
      background: $pink;
      transform: translate(0, 0.25em);
      &::before {
        box-shadow: 0 0 0 2px $pink-border, 0 0.5em 0 0 $pink-shadow;
        transform: translate3d(0, 0.5em, -1em);
      }
    }
    .optionbox,fieldset,legend{
        font-size: 72px;
        font-family:"Times New Roman";
    }
    &:active {
      background: $pink;
      transform: translate(0em, 0.75em);
      &::before {
        box-shadow: 0 0 0 2px $pink-border, 0 0 $pink-shadow;
        transform: translate3d(0, 0, -1em);
      }
    }
  }
}
</style>
</head>

<body>
    <a href="creer_entite.php">
	<button class= "button__text">
	<img src="../../images/icone_retour.png" height="35"> 
    </button>
    </a>
<div class="optionbox">
       <form method="POST" action="creer_ets.php" autocomplete="off">
           <fieldset>
           <legend style="font-size: 24px;">information etablissement</legend>          
        <p style="font-size: 24px; color: black;
        font-style: bold;
        ">     Nom etablissement
        <select class="nomets" name="nomets">
            <option name="nomets">keyce yaounde</option>
            <option name="nomets">keyce douala</option>
</select>
</p>
<br><br>
           <button type="submit" name="creer"  class="button_creer"><a>Creer</a></button>
           </fieldset>
       </form>
   </div> 
</body>
</html>