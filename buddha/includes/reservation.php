    <div class="container contentContainer" id="reservation">
    
    

	<div class="row text-center">
	
		<h1 class="center title"> Réservations</h1>
		<img class="buuuud" src="bud.png" alt="">
	</div>
	
	<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3 emailForm">
<div class="row">
<div class="col-md-8"><h1 class="">Réserver</h1></div> <div class="col-md-4"><h1><div id="txt"></div></h1></div>
</div>

<?php if (isset($result)) {echo $result;} ?>


<p class="lead">Afin de reserver - Veuillez nous confier les informations suivantes</p>


<form method="post">



<div class="col-md-6 form-group">
<label for="name">Nom de la réservation:</label>
<input type="text" name="name" class="form-control" placeholder="Nom"
value="<?php if (isset($_POST['name'])) {echo $_POST['name'];}?>" />
</div>

<div class="col-md-6 form-group">
<label for="nombre">Nombre de clients:</label>
<input type="number" name="nombre" class="form-control" value="<?php echo $_POST['nombre']; ?>" />
</div>

<div class="col-md-6 form-group">
<label for="date">Date:</label>
<div class='input-group date' id='datetimepicker8'>
<input type="text" name="date" class="form-control datepicker" value="<?php if (isset($_POST['date'])) { echo $_POST['date'];} ?>" /> <span class="input-group-addon">
                    <span class="fa fa-calendar">
                    </span>
                </span>
            </div>
</div>


<div class="col-md-6 form-group">
  <label for="sel4">Heure:</label>
  <select class="form-control" name="sel4"  value="<?php echo $_POST['sel4']; ?>" >
    <option>12h</option>
    <option>12h30</option>
     <option>13h</option>
    <option>13h30</option>
     <option>14h</option>
    <option>19h</option>
     <option>19h30</option>
    <option>20h</option>
    <option>20h30</option>
     <option>21h</option>
    <option>21h30</option>
     <option>22h</option>
    <option>22h30</option>
    <option>23h</option>
    
  </select>
</div>




<div class="col-md-12 form-group">
<label for="phone">Numero de téléphone portable (notre directeur vous cotactera par SMS pour vous confirmer la réservation):</label>
<input type="tel" name="phone" class="form-control" placeholder="ex. 06 xx xx xx xx"
value="<?php if (isset($_POST['phone'])) {echo $_POST['phone'];}?>" />
</div>


<div class="col-md-12 form-group">
    <button type="submit" name="submit" value="Réserver" class="btn btn-success btn-block btn-lg" value="">  Réserver <span class="fa fa-check-square"></span></button>
    </div>
</form>
    
</div>
</div>
</div>
	
</div>

<div class="container" id="midrow2">
  <br>
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="r1.jpg" alt="Chania" width="460" height="345">
      </div>
      
      <div class="item">
        <img src="r2.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="r3.jpg" alt="Chania" width="460" height="345">
      </div>
    
    </div>

    <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
