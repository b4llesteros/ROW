<form>
    <div class="desktop-one-column mobile-one-column">
        <div class="column">
            <div class="container--tabs">
                <ul class="container-tabs">
                    <li class="tab tab--active" data-tab="content" >Contenido</li>
                    <li class="tab" data-tab="seo">SEO</li>
                    <li class="tab" data-tab="images">Imágenes</li>
                    <li>
                        <div class="save-button" id="save-button">
                            <svg viewBox="0 0 24 24">
                                <path  d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <div class="create-button" data-url="{{route('faqs_create')}}">
                            <svg  viewBox="0 0 24 24">
                                <path  d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                            </svg>
                        </div>
                    </li>
                    <li>
                        <label class="btn-onoff">
                            <input id="checkbox" type="checkbox" name="name" data-onoff="toggle" checked ><span></span>
                        </label>
                    </li>
                    <li>
                        <div class="close-edit">
                            <svg  viewBox="0 0 24 24">
                                <path fill="currentColor" d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" />
                            </svg>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
        <div class="container-content">
            <div class="content content--active" data-tab="content">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="category-section">
                            <div class="category-title">
                                <span>Categories</span>
                            </div>
                            <div class="category-selector">
                                <select>
                                    <option>Selecciona una categoría</option>
                                    <option>Categoría 1</option>
                                    <option>Categoría 2</option>
                                    <option>Categoría 3</option>
                                    <option>Categoría 4</option>
                                    <option>Categoría 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="form-element">
                            <div class="form-element-label">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-element-input">
                                <input id="name-input" type="text" name="name" placeholder="Name" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desktop-one-column mobile-one-column">
                    <div class="column">
                        <div class="container--tabs-local">
                            <ul class="container-tabs ">
                                <li class="tab-local tab--active-local" data-tab="spanish" >Español</li>
                                <li class="tab-local" data-tab="english">English</li>
                            </ul>
                        </div>
                    </div>
                        <div class="container-content">
                            <div class="content-local content--active-local" data-tab="spanish">
                                <div class="edit-title">
                                    <span>Título</span>
                                </div>
                                <div class="title-input">
                                    <textarea class="ckeditor" placeholder="Escribe el título"></textarea>
                                </div>
                                <div class="content-title">
                                    <span>Contenido</span>
                                </div>
                                <div class="content-input">
                                    <textarea class="ckeditor" name="content" placeholder="Escribe el contenido"></textarea>
                                </div>
                            </div>
                            <div class="content-local" data-tab="english">
                                <div class="edit-title">
                                    <span>Title</span>
                                </div>
                                <div class="title-input">
                                    <textarea class="ckeditor" placeholder="Escribe el título"></textarea>
                                </div>
                                <div class="content-title">
                                    <span>Content</span>
                                </div>
                                <div class="content-input">
                                    <textarea class="ckeditor" name="content" placeholder="Escribe el contenido"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" data-tab="seo">
                <span>Posicionamiento SEO</span>
            </div>
            <div class="content" data-tab="images">
                <div class="desktop-two-columns">
                    <div class="column">
                        <div class="image-selector">
                            <label class="file-input">
                            <div id="image-preview">
                                <svg class="image-preview-svg" viewBox="0 0 24 24">
                                    <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                                </svg>
                                <img class="image-preview-element" src="">
                                <div class="image-preview-delete">
                                    <svg   viewBox="0 0 24 24">
                                        <path  d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                                    </svg>
                                </div>
                            </div>
                            <input type="file" name="image-product" class="choose-file" accept="image/*" >
                        </div>
                    </div>
                    <div class="column">
                        <div class="image-selector">
                            <label class="file-input">
                            <div id="image-preview">
                                <svg class="image-preview-svg" viewBox="0 0 24 24">
                                    <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
                                </svg>
                                <img class="image-preview-element" id="image-preview-element" src="">
                                <div class="image-preview-delete">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                                    </svg>
                                </div>
                            </div>
                            <input type="file" name="image-featured" class="choose-file" accept="image/*"  >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
