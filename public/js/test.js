
/*let $collectionHolder;

let $addNewItem = $('<a href="#" class="btn btn-info">Ajouter un ingrédient</a>');

$(document).ready(() => {
    // get the collectionHolder
    $collectionHolder = $('#ingredients_list');

    //append the ass new item to the collectionHolder
    $collectionHolder.append($addNewItem);

    $collectionHolder.data('index', $collectionHolder.find('.panel').length);

    // add remove button to existing items
    $collectionHolder.find('.panel').each(function (item) {
        addRemoveButton($(this));
    });

    // handle the click event for addNewItem
    $addNewItem.on('click', function (e) {
        e.preventDefault();
        // create a new form and append into the collectionHolder
        addNewForm();
    });
});

// add new item 
function addNewForm() {
    // getting the prototype
    let prototype = $collectionHolder.data('prototype');

    // get the index
    let index = $collectionHolder.data('index');

    // create the form
    let newForm = prototype;

    newForm = newForm.replace(/__name__/g, index);

    $collectionHolder.data('index', index++);

    // create the panel
    let $panel = $('<div class="panel panel-warning"><div class="panel-heading"></div></div>');

    //create the panel-body an append the form to it
    let $panelBody = $('<div class="panel-body"></div>').append(newForm);

    // appen the boy to the panel
    $panel.append($panelBody);

    // append the removedbutton to the new panel
    addRemoveButton($panel);

    // append the panel to the addNewItem
    $addNewItem.before($panel);
    

}




//remove item
function addRemoveButton($panel) {
    // Create remove button
    let $removeButton = $('<a href="#" class="btn btn-danger">Supprimer</a>');

    // append the removeButtton to the panel footer

    let $panelFooter = $('<div class="panel-footer"></div>').append($removeButton);

    // handle the click event of the remove button
    $removeButton.on('click', function (e) {
        e.preventDefault();
        $(e.target).parents('.panel').slideUp(1000, () => {
            $(this).remove();
        });
    });

    // append the footer to the panel
    $panel.append($panelFooter);
}*/