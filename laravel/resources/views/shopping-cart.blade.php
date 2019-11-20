@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
@if(Session::has('cart'))


<body class="bg-light" cz-shortcut-listen="true">

  <div class="container">
    <div class="py-5 text-center">
      <img id="logo_header" src="/Images/logo_dbe_cesi_nice.png" alt="Logo_Cesi"></a>
      <h2>Procéder au paiement</h2>
      <p class="lead">Veuillez remplir ce formulaire pour pouvoir procéder au paiement</p>
    </div>

    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Votre Panier</span>
          <span class="badge badge-warning badge-pill">{{ Session::get('cart')->totalQty }}</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Produit 1</h6>
              <small class="text-muted">description</small>
            </div>
            <span class="text-muted">??€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Produit 2</h6>
              <small class="text-muted">description</small>
            </div>
            <span class="text-muted">??€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Produit 3</h6>
              <small class="text-muted">description</small>
            </div>
            <span class="text-muted">??€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (EUR)</span>
            <strong>{{ $totalPrice }} €</strong>
          </li>
        </ul>

      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Adresse de facturation: </h4>
        <form class="needs-validation" novalidate="">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Prénom</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Un prénom valide est requis.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Nom</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                  Un nom valide est requis.
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(Optionnel)</span></label>
            <input type="email" class="form-control" id="email" placeholder="vous@exemple.com">
            <div class="invalid-feedback">
              Veuillez entrez une adresse mail valide.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Adresse</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Rue..." required="">
            <div class="invalid-feedback">
              Veuillez entrer une adresse de livraison.
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="zip">Code Postal</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                  Le code postal est obligatoire.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">L'adresse de livraison est la même que l'adresse de facturation</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">
                Sauvegarder ces informations pour la prochaine fois</label>
          </div>
          <hr class="mb-4">

          <h4 class="mb-3">Paiement</h4>

          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
              <label class="custom-control-label" for="credit">Carte de crédit</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
              <label class="custom-control-label" for="paypal">Paypal</label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Nom du titulaire de la carte</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">Nom complet</small>
              <div class="invalid-feedback">
                  Le nom du titulaire de la carte est obligatoire.
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Numéro de carte</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Le numéro de carte est obligatoire.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Date d'expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Date d'expiration est obligatoire.
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Code CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Code de sécurité est obligatoire.
              </div>
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Procéder au paiement</button>
        </form>
      </div>
    </div>
  </div>

@else
<br>
<br><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark" style="color: white;">{{ __('Panier Vide') }}</div>

                <div class="card-body">

                        <div class="form-group row">

                        </div>

                        <div class="form-group row">
                            <div class="alert alert-warning alert-dismissible fade show" style="padding:5% 2% 7% 2%;margin-left:10%;" role="alert">
                                Aucun article dans le panier  ...
                            </div>
                        </div>

                        <div class="form-group row">

                        </div>

                        <div class="form-group row mb-0">

                        </div>
                    </form>
                </div>
            </div>
        </div>


@endif

@endsection