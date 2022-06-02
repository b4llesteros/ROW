export let renderImageUpload = () => {

    let chooseFiles = document.querySelectorAll('.choose-file');
    let deleteFiles = document.querySelectorAll('.image-preview-delete');

    chooseFiles.forEach(chooseFile => {

        chooseFile.addEventListener("change", () => {

            let files = chooseFile.files[0];
            let fileReader = new FileReader();

            fileReader.readAsDataURL(files);

            fileReader.addEventListener("load", () => {
                chooseFile.closest('.image-selector').querySelector('.image-preview-element').classList.add('active');
                chooseFile.closest('.image-selector').querySelector('.image-preview-element').src = fileReader.result;
                chooseFile.closest('.image-selector').querySelector('.image-preview-svg').classList.add('hidden');
                chooseFile.closest('.image-selector').querySelector('.image-preview-delete').classList.add('active');
            });
        });
    });

    deleteFiles.forEach(deleteFile => {

        deleteFile.addEventListener("click", () => {
            deleteFile.closest('.image-selector').querySelector('.image-preview-element').classList.remove('active');
            deleteFile.closest('.image-selector').querySelector('.image-preview-element').src = '';
            deleteFile.closest('.image-selector').querySelector('.image-preview-svg').classList.remove('hidden');
            deleteFile.closest('.image-selector').querySelector('.image-preview-delete').classList.remove('active');
        });

        return;
    });
}