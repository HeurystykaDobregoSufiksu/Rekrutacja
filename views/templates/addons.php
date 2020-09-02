
<!-- Modal -->
<div class="modal fade" id="dodajArtykul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodaj artykuł</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action='/article/add' method="POST">
              <input class="form-control" type="text" name="title" placeholder="Tytuł">
              <textarea class="form-control" name="content" rows="5" placeholder="Treść"></textarea>
              <input class="form-control" type="number" name="author" placeholder="Default input">
              <select name="category" class="form-control">
                  <?php foreach ($categories as $category){?>
                      <option value="<?=$category->getID();?>"><?=$category->getCategory()?></option>
                  <?php } ?>
              </select>
              <select name="status" class="form-control">
                  <option disabled>Wybierz status</option>
                  <option value="accepted">Zaakceptowany</option>
                  <option value="waiting">Oczekujący</option>
                  <option value="rejected">Odrzucony</option>
              </select>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
        <button type="submit" class="btn btn-primary">Dodaj</button>

      </div>
        </form>
    </div>
  </div>
</div>


<div class="modal fade" id="dodajKategorie" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dodaj Kategorie</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action='/category/add' method="POST">
                    <input class="form-control" type="text" name="category" placeholder="Nazwa">
                    <textarea class="form-control" name="description" rows="5" placeholder="Opis"></textarea>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuluj</button>
                <button type="submit" class="btn btn-primary">Dodaj</button>

            </div>
            </form>
        </div>
    </div>
</div>