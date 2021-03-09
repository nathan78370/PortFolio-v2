<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="js/jquery-1.12.4-jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/css/bootstrap-slider.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
    />
    <link rel="stylesheet" href="assets/css/admin.css" />
		
</head>

	<body>	
		<div class="col-lg-12">
				<h2>
				<?php
				
				require_once 'assets/includes/functions.php';
				
				session_start();

				if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
				{
					header("location: index.php");
				}
				
				$id = $_SESSION['user_login'];
				
				$select_stmt = $db->prepare("SELECT * FROM tbl_user WHERE user_id=:uid");
				$select_stmt->execute(array(":uid"=>$id));
	
				$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
				
				if(isset($_SESSION['user_login']))
				{
				?>
					Welcome,
				<?php
						echo $row['username'];
				}
				?>
				</h2>
					<a href="logout.php">Logout</a>
		</div>	
		<body class="article">
      <nav class="navbar navbar-default navbar-fixed-top shadow">
        <div class="container-fluid">
          <div class="navbar-header article-title">
            <a class="navbar-brand" href="index.php">
              <span class="label label-danger hidden">Publié</span>
              <span class="label label-warning">Non-enregistré</span>
              <span class="label label-success hidden">Enregistré</span>
              Création d'un Projet
            </a>
          </div>
          <span class="navbar-right article-actions">
            <div class="btn-group" role="group" aria-label="...">
              <button
                type="button"
                class="btn btn-lg btn-success btn-save"
                id="load"
                data-complete-text="<i class='fa fa-check'></i>Enregistré"
                data-loading-text="<i class='fa fa-spinner fa-pulse'></i> saving ..."
              >
                <i class="fa fa-floppy-o" aria-hidden="true"></i>Enregistrer
              </button>
            </div>
          </span>
        </div>
      </nav>
      <div class="article-container">
        <div class="row">
          <div class="col-xs-12 col-lg-4 col-lg-push-8 article-sidebar">
            <div class="panel panel-primary">
              <div
                class="panel-heading panel-toggler"
                data-toggle="collapse"
                data-target="#collapse-publish"
                aria-expanded="true"
                aria-controls="collapse-publish"
              >
                <h3 class="panel-title">Paramètres de publication</h3>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
                <i class="fa fa-caret-up" aria-hidden="true"></i>
              </div>
              <ul class="list-group collapse in" id="collapse-publish">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-xs-6">
                      <label for="files">Catégorie :</label>
                      <select id="files" class="form-control">
                        <option>Dévoloppement Web</option>
                        <option>Stage</option>
                        <option>Système</option>
                        <option>Programmation</option>
                      </select>
                    </div>
                    <div class="col-xs-6">
                      <label for="status">Date :</label>
                      <input
                        name="Date"
                        placeholder="AAAA - AAAA"
                        class="form-control required signatureField js-signature-autocomplete"
                        data-error-required="Signez votre article"
                        data-signature-list="[]"
                        type="text"
                      />
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-xs-6">
                      <label for="status">Langage :</label>
                      <input
                        name="signature"
                        placeholder="C#,  PYTHON,  ..."
                        class="form-control required signatureField js-signature-autocomplete"
                        data-error-required="Signez votre article"
                        data-signature-list="[]"
                        type="text"
                      />
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <strong>Publier le Projet :</strong>
                  <div class="radio">
                    <label>
                      <input
                        type="radio"
                        name="optionsRadios"
                        id="optionsRadios1"
                        value="option1"
                      />
                      Oui.
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input
                        type="radio"
                        name="optionsRadios"
                        id="optionsRadios2"
                        value="option2"
                        checked
                      />
                      Non.
                    </label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-lg-8 col-lg-pull-4 article-content">
            <input
              type="text"
              class="form-control input-lg input-title"
              placeholder="Titre"
            />
            <div class="row">
              <div class="col-sm-6 col-md-4">
                <div class="panel panel-default panel-highlight">
                  <div class="panel-heading">
                    <h3 class="panel-title">Image d'illustration</h3>
                    <button type="button" class="alert btn btn-lg btn-default">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                  </div>

                  <div class="panel-body row">
                    <div class="col-xs-12">
                      <div class="article-dropzone">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                        <span>Image d'entête</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-8">
              </div>
            </div>
            <input
              type="text"
              class="form-control input-title"
              placeholder="Sujet"
            />
            <textarea
              class="form-control input-title"
              rows="6"
              placeholder="Description"
            ></textarea>
            <input
              type="text"
              class="form-control input-title"
              placeholder="Procédure"
            />
            <textarea
              class="form-control input-title"
              rows="6"
              placeholder="Description Procédure"
            ></textarea>

            <div class="article-content-drag">
              <div class="panel panel-default panel-img">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <i class="fa fa-bars" aria-hidden="true"></i>Images
                  </h3>
                </div>
                <div class="panel-body hidden">
                  <ul class="media-list">
                    <li class="media">
                      <div class="media-left media-top">
                        <div class="media-left-img-block">
                          <img
                            class="media-object"
                            src="https://placeimg.com/854/480/people"
                            alt="..."
                          />
                        </div>
                      </div>
                      <div class="media-body">
                        <div class="row">
                          <div class="col-sm-7 col-md-8 col-lg-9">
                            <textarea
                              class="form-control form-textarea-legend"
                              placeholder="Légende"
                            ></textarea>
                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">&copy;</span>
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Copyright"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5 col-md-4 col-lg-3">
                            <div
                              class="btn-group-vertical btn-block"
                              role="group"
                              aria-label="Vertical button group"
                            >
                              <button type="button" class="btn btn-info">
                                <i
                                  class="fa fa-pencil-square-o"
                                  aria-hidden="true"
                                ></i>
                                Editer
                              </button>

                              <button type="button" class="btn btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Supprimer
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left media-top">
                        <div class="media-left-img-block">
                          <img
                            class="media-object"
                            src="https://placeimg.com/854/480/people"
                            alt="..."
                          />
                        </div>
                      </div>
                      <div class="media-body">
                        <div class="row">
                          <div class="col-sm-7 col-md-8 col-lg-9">
                            <textarea
                              class="form-control form-textarea-legend"
                              placeholder="Légende"
                            ></textarea>

                            <div class="form-group">
                              <div class="input-group">
                                <span class="input-group-addon">&copy;</span>
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Copyright"
                                />
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-5 col-md-4 col-lg-3">
                            <div
                              class="btn-group-vertical btn-block"
                              role="group"
                              aria-label="Vertical button group"
                            >
                              <button type="button" class="btn btn-info">
                                <i
                                  class="fa fa-pencil-square-o"
                                  aria-hidden="true"
                                ></i>
                                Editer
                              </button>

                              <button type="button" class="btn btn-danger">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Supprimer
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <div class="text-center article-img-add row">
                    <div class="col-xs-6">
                      <a
                        class="article-img-add-btn btn btn-default btn-lg btn-default"
                        href="#"
                        ><i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Ajouter des images</a
                      >
                    </div>
                  </div>
                </div>
                <div class="panel-body">
                  <ul class="media-list media-list-grid">
                    <li class="media">
                      <div class="media-left media-top">
                        <div class="media-left-img-block">
                          <img
                            class="media-object"
                            src="https://placeimg.com/854/480/people"
                            alt="..."
                          />
                        </div>
                        <div
                          class="btn-group btn-block"
                          role="group"
                          aria-label="Vertical button group"
                        >
                          <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                        </div>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left media-top">
                        <div class="media-left-img-block">
                          <img
                            class="media-object"
                            src="https://placeimg.com/854/480/people"
                            alt="..."
                          />
                        </div>
                        <div
                          class="btn-group btn-block"
                          role="group"
                          aria-label="Vertical button group"
                        >
                          <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </button>
                        </div>
                      </div>
                    </li>
                  </ul>

                  <div class="text-center article-img-add row">
                    <div class="col-xs-6">
                      <a
                        class="article-img-add-btn btn btn-default btn-lg btn-default"
                        href="#"
                        ><i class="fa fa-plus-circle" aria-hidden="true"></i>
                        Ajouter des images</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 article-semantic">
            <hr />
            <br />
            <div class="panel panel-default panel-semantic">
              <ul class="list-group">
                <li class="list-group-item list-group-item-highlight">
                  <h4>Articles liés :</h4>

                  <ol class="list-linked-articles list-3-columns">
                    <li>
                      [14/08/2017] <a href="#">Lorem ipsum dolor sit amet</a
                      ><button class="btn btn-sm btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </li>
                    <li>
                      [14/08/2017] <a href="#">Lorem ipsum dolor sit amet</a
                      ><button class="btn btn-sm btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </li>
                    <li>
                      [14/08/2017] <a href="#">Lorem ipsum dolor sit amet</a
                      ><button class="btn btn-sm btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </li>
                    <li>
                      [14/08/2017] <a href="#">Lorem ipsum dolor sit amet</a
                      ><button class="btn btn-sm btn-danger">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </button>
                    </li>
                  </ol>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="article-backdrop">
        <i class="fa fa-spinner fa-pulse fa-4x"></i>
      </div>						
	</body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/7f87a215c5.js"></script>
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="assets/js/admin.js"></script>
  </body>
</html>