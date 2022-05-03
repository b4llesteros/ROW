export let renderDeleteButton = () => {



    let deleteButtons = document.querySelectorAll('.delete-button');
    let deleteLayer = document.querySelector('.delete-layer');
    let deleteLayerCloseButton = document.querySelector('.delete-cancel');
    

    deleteButtons.forEach(deleteButtons => {
        deleteButtons.addEventListener('click', () => {
            deleteLayer.classList.add('delete-layer-active');
                if(deleteLayer.classList.contains('delete-layer-active')) {
                    deleteLayer.addEventListener('click', () => {
                        deleteLayer.classList.remove('delete-layer-active');
                    });
                }
        });
    });

    deleteLayerCloseButton.addEventListener('click', () => {
        deleteLayerCloseButton.classList.remove('delete-layer-active');
    });

    
};
