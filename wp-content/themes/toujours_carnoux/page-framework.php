<?php
/**
 * Default wordpress template
 *
 * @package churchill
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<?php get_header(); ?>

<main id="page_wrapper" class="wrapper">

    <div id="typography" class="py-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fw-bold mb-3">Balises Hn</div>
                    <h1>Lorem ipsum doloris sit amet</h1>
                    <h2>Lorem ipsum doloris sit amet</h2>
                    <h3>Lorem ipsum doloris sit amet</h3>
                    <h4>Lorem ipsum doloris sit amet</h4>
                    <h5>Lorem ipsum doloris sit amet</h5>
                    <h6>Lorem ipsum doloris sit amet</h6>
                </div>
                <div class="col-12 my-3 d-flex flex-column align-items-start">
                    <div class="fw-bold mb-3">Pagination</div>
                    <nav aria-label="Posts navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="btn-nav btn-prev" href="#"></a>
                            </li>
                            <li class="page-item active">
                                <span class="page-link current">1</span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><span class="page-link">...</span></li>
                            <li class="page-item">
                                <a class="page-link" href="#">9</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">10</a>
                            </li>
                            <li class="page-item">
                                <a class="btn-nav btn-next" href="#"></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div id="background" class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 p-3 my-3 rounded bg-primary">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
                <div class="col-12 p-3 my-3 rounded bg-secondary">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
                <div class="col-12 p-3 my-3 rounded bg-tertiary">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
                <div class="col-12 p-3 my-3 rounded bg-danger">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
                <div class="col-12 p-3 my-3 rounded bg-success">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
                <div class="col-12 p-3 my-3 rounded bg-info">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
                <div class="col-12 p-3 my-3 rounded bg-lightalt">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
                <div class="col-12 p-3 my-3 rounded bg-dark">
                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta ex cupiditate temporibus autem debitis aliquam magnam quae minima recusandae quidem, excepturi odit velit necessitatibus hic repudiandae possimus quis architecto. Amet?</p>
                </div>
            </div>
        </div>
    </div>
    <div id="button" class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-sm</div>
                    <a href="#" class="btn btn-sm btn-primary">Bouton</a>
                    <a href="#" class="btn btn-sm btn-secondary">Bouton</a>
                    <a href="#" class="btn btn-sm btn-success">Bouton</a>
                    <a href="#" class="btn btn-sm btn-info">Bouton</a>
                    <a href="#" class="btn btn-sm btn-tertiary">Bouton</a>
                    <a href="#" class="btn btn-sm btn-danger">Bouton</a>
                    <a href="#" class="btn btn-sm btn-light">Bouton</a>
                    <a href="#" class="btn btn-sm btn-dark">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn</div>
                    <a href="#" class="btn btn-primary">Bouton</a>
                    <a href="#" class="btn btn-secondary">Bouton</a>
                    <a href="#" class="btn btn-success">Bouton</a>
                    <a href="#" class="btn btn-info">Bouton</a>
                    <a href="#" class="btn btn-tertiary">Bouton</a>
                    <a href="#" class="btn btn-danger">Bouton</a>
                    <a href="#" class="btn btn-light">Bouton</a>
                    <a href="#" class="btn btn-dark">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-lg</div>
                    <a href="#" class="btn btn-lg btn-primary">Bouton</a>
                    <a href="#" class="btn btn-lg btn-secondary">Bouton</a>
                    <a href="#" class="btn btn-lg btn-success">Bouton</a>
                    <a href="#" class="btn btn-lg btn-info">Bouton</a>
                    <a href="#" class="btn btn-lg btn-tertiary">Bouton</a>
                    <a href="#" class="btn btn-lg btn-danger">Bouton</a>
                    <a href="#" class="btn btn-lg btn-light">Bouton</a>
                    <a href="#" class="btn btn-lg btn-dark">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-icon-arrow</div>
                    <a href="#" class="btn btn-primary btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-secondary btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-success btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-info btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-tertiary btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-danger btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-light btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-dark btn-icon-arrow">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-icon-arrow</div>
                    <a href="#" class="btn btn-primary btn-icon-arrow-up-right">Bouton</a>
                    <a href="#" class="btn btn-secondary btn-icon-arrow-up-right">Bouton</a>
                    <a href="#" class="btn btn-success btn-icon-arrow-up-right">Bouton</a>
                    <a href="#" class="btn btn-info btn-icon-arrow-up-right">Bouton</a>
                    <a href="#" class="btn btn-tertiary btn-icon-arrow-up-right">Bouton</a>
                    <a href="#" class="btn btn-danger btn-icon-arrow-up-right">Bouton</a>
                    <a href="#" class="btn btn-light btn-icon-arrow-up-right">Bouton</a>
                    <a href="#" class="btn btn-dark btn-icon-arrow-up-right">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn i.bi</div>
                    <a href="#" class="btn btn-primary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-secondary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-success">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-info">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-tertiary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-danger">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-light">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-dark">Bouton<i class="bi bi-arrow-right-short"></i></a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-outline-* .btn-sm</div>
                    <a href="#" class="btn btn-sm btn-outline-primary">Bouton</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary">Bouton</a>
                    <a href="#" class="btn btn-sm btn-outline-success">Bouton</a>
                    <a href="#" class="btn btn-sm btn-outline-info">Bouton</a>
                    <a href="#" class="btn btn-sm btn-outline-tertiary">Bouton</a>
                    <a href="#" class="btn btn-sm btn-outline-danger">Bouton</a>
                    <a href="#" class="btn btn-sm btn-outline-light">Bouton</a>
                    <a href="#" class="btn btn-sm btn-outline-dark">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-outline-*</div>
                    <a href="#" class="btn btn-outline-primary">Bouton</a>
                    <a href="#" class="btn btn-outline-secondary">Bouton</a>
                    <a href="#" class="btn btn-outline-success">Bouton</a>
                    <a href="#" class="btn btn-outline-info">Bouton</a>
                    <a href="#" class="btn btn-outline-tertiary">Bouton</a>
                    <a href="#" class="btn btn-outline-danger">Bouton</a>
                    <a href="#" class="btn btn-outline-light">Bouton</a>
                    <a href="#" class="btn btn-outline-dark">Bouton</a>
                </div>
                <div class="col-12 my-3 py-6 bg-dark">
                    <div class="fw-bold">.btn-outline-* .btn-lg</div>
                    <a href="#" class="btn btn-lg btn-outline-primary">Bouton</a>
                    <a href="#" class="btn btn-lg btn-outline-secondary">Bouton</a>
                    <a href="#" class="btn btn-lg btn-outline-success">Bouton</a>
                    <a href="#" class="btn btn-lg btn-outline-info">Bouton</a>
                    <a href="#" class="btn btn-lg btn-outline-tertiary">Bouton</a>
                    <a href="#" class="btn btn-lg btn-outline-danger">Bouton</a>
                    <a href="#" class="btn btn-lg btn-outline-light">Bouton</a>
                    <a href="#" class="btn btn-lg btn-outline-dark">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-outline-* .btn-icon-arrow</div>
                    <a href="#" class="btn btn-outline-primary btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-outline-secondary btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-outline-success btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-outline-info btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-outline-tertiary btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-outline-danger btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-outline-light btn-icon-arrow">Bouton</a>
                    <a href="#" class="btn btn-outline-dark btn-icon-arrow">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-outline-* i.bi</div>
                    <a href="#" class="btn btn-outline-primary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-outline-secondary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-outline-success">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-outline-info">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-outline-tertiary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-outline-danger">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-outline-light">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn btn-outline-dark">Bouton<i class="bi bi-arrow-right-short"></i></a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-circle</div>
                    <a href="#" class="btn btn-circle btn-primary btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-secondary btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-success btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-info btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-tertiary btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-danger btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-light btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-dark btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-primary"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-secondary"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-success"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-info"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-tertiary"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-danger"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-light"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-dark"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-primary btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-secondary btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-success btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-info btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-tertiary btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-danger btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-light btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-circle btn-dark btn-lg"><i class="bi bi-envelope"></i></a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-square</div>
                    <a href="#" class="btn btn-square btn-primary btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-secondary btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-success btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-info btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-tertiary btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-danger btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-light btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-dark btn-sm"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-primary"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-secondary"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-success"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-info"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-tertiary"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-danger"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-light"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-dark"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-primary btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-secondary btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-success btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-info btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-tertiary btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-danger btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-light btn-lg"><i class="bi bi-envelope"></i></a>
                    <a href="#" class="btn btn-square btn-dark btn-lg"><i class="bi bi-envelope"></i></a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-link-*</div>
                    <a href="#" class="btn-link btn-primary">Bouton</a>
                    <a href="#" class="btn-link btn-secondary">Bouton</a>
                    <a href="#" class="btn-link btn-success">Bouton</a>
                    <a href="#" class="btn-link btn-info">Bouton</a>
                    <a href="#" class="btn-link btn-tertiary">Bouton</a>
                    <a href="#" class="btn-link btn-danger">Bouton</a>
                    <a href="#" class="btn-link btn-light">Bouton</a>
                    <a href="#" class="btn-link btn-dark">Bouton</a>
                </div>
                <div class="col-12 my-3">
                    <div class="fw-bold">.btn-link-* i.bi</div>
                    <a href="#" class="btn-link btn-primary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn-link btn-secondary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn-link btn-success">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn-link btn-info">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn-link btn-tertiary">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn-link btn-danger">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn-link btn-light">Bouton<i class="bi bi-arrow-right-short"></i></a>
                    <a href="#" class="btn-link btn-dark">Bouton<i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div id="forms" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6"> <form action="" class=""> <div class="row d-flex justify-content-between"><div class="col"><input type="text" class="form-control" placeholder="First name"></div><div class="col"><input type="text" class="form-control" placeholder="Last name"></div></div><div class="form-floating"> <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div><div class="form-floating"> <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> <label for="floatingPassword">Password</label> </div><div class="form-floating mb-3"> <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" rows="8"></textarea> <label for="floatingTextarea2">Message</label> </div><div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault"> Default checkbox </label> </div><div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked=""> <label class="form-check-label" for="flexCheckChecked"> Checked checkbox </label> </div><div class="form-check"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"> <label class="form-check-label" for="flexRadioDefault1"> Default radio </label> </div><div class="form-check"> <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked=""> <label class="form-check-label" for="flexRadioDefault2"> Default checked radio </label> </div><select class="form-select" aria-label="Default select example"> <option selected="">Open this select menu</option> <option value="1">One</option> <option value="2">Two</option> <option value="3">Three</option> </select> <div class="mb-3"> <label for="formFile" class="form-label">Default file input example</label> <input class="form-control" type="file" id="formFile"> </div><div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <label class="form-check-label" for="inlineRadio1">Radio button 1</label> </div><div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label class="form-check-label" for="inlineRadio2">Radio button 2</label> </div><div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled=""> <label class="form-check-label" for="inlineRadio3">Radio button 3 (disabled)</label> </div><div class="form-check form-switch"> <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"> <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label> </div><input type="submit" value="Bouton d'envoi"> </form> </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>