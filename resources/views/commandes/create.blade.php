<div class="container">
       <div><h1>{{__('Enregistrement d\'un Commande')}}</h1></div>
       <div class="container">
       <form action="{{route('commande.store')}}" method="post">
       @csrf
            <div>
              <div class="col-md-6">
                <div class="form-group">      
                  <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="datesaisie" name="datesaisie" type="datesaisie" placeholder="Your datesaisie *" required="required" data-validation-required-message="Please enter your datesaisie.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="datelivraison" name="datelivraison" type="datelivraison" placeholder="Your datelivraison *" required="required" data-validation-required-message="Please enter your datelivraison.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enregistrer</button>
              </div>
            </div>
        
            @if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif


          </form>