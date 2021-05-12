@extends('layouts.app')

@section('content')
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    @foreach($content as $contenue)
        
        <button class="accordion"><b>Bloc :</b> <?= $contenue->class_content ?>, <b>sur la page :</b> <?= $contenue->pages()->first()->libelle_page ?></button>
        <div class="panel">
            <form>
                <h2>Titre</h2>
                <input type="text" value="<?= $contenue->titre_content ?>">
                <h2>Descritption</h2>
                <textarea><?= $contenue->content ?></textarea>
                <p><?= $contenue->content ?></p>
            </form>
        </div>

    @endforeach


    <?php
    echo '<p>'.$contenue['id'].'</p>';
    echo '<p>'.$contenue['class_content'].'</p>';
    echo '<p>Sur la page '.$contenue['page_id'].'</p>';
    echo '<p>'.$contenue['content'].'</p>';
    echo '<p>'.$contenue['titre_content'].'</p>';
    echo '<p>'.$contenue['created_at'].'</p>';
    echo '<p>'.$contenue['updated_at'].'</p>';

    ?>



@endsection
