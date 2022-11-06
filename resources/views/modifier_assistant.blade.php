@extends('layout.mainlayout')

@section('content')
<div class="container mt-3">
    <form action="#">
        <h2>Modification de l'assistant</h2>
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Informations Personnelles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Informations Connexion</a>
        </li>
        </ul>
    
        <!-- Tab panes -->
        <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
            <div class="table-responsive">
                <table class="table table-bordered table_info">
                    <tbody>
                        <tr>
                            <th>Nom</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Date de naissance</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        <tr>
                        <tr>
                            <th>Email</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Type d'assistant</th>
                            <td>
                                <div class="form-group">
                                    <select class="form_style" id="type_assistant">
                                        <option>Permanent</option>
                                        <option>Temporaire</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div id="menu2" class="container tab-pane fade"><br>
            <div class="table-responsive">
                <table class="table table-bordered table_info">
                    <tbody>
                        <tr>
                            <th>Email</th>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form_style" placeholder="Valeur">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
        <div class="flex_div_center">
            <a href="#"><button type="submit" class="btn_style flex_div_center_item">Valider</button></a> {{-- afficher si value=("Non_payes") --}}
            <a href="#"><button type="button" class="btn_style btn_annuler  flex_div_center_item">Reinitiliser</button></a> {{-- actualise juste la page --}}
            <a href="#"><button type="button" class="btn_style btn_rouge flex_div_center_item">Supprimer</button></a>
        </div>
    </form>
</div>
@endsection