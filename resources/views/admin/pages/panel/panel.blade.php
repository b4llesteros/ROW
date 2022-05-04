
@extends('admin.layout.master')   

@section('content')            
        <div class="table">
            <table>             
                                        
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th class="adress">Adress</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>usuario 1</td>
                    <td>Teléfono 1</td>
                    <td>email@email.com</td>
                    <td class="adress">Calle Random nº infinito</td>
                    <td>
                        <div class="table-buttons">
                            <div class="table-button delete-button ">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                </svg>
                            </div>
                            <div class="table-button edit-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>usuario 2</td>
                    <td>Teléfono 2</td>
                    <td>email@email.com</td>
                    <td class="adress">Calle Random nº infinito</td>
                    <td>
                        <div class="table-buttons">
                            <div class="table-button delete-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                </svg>
                                
                            </div>
                            <div class="table-button edit-button">
                                <svg viewBox="0 0 24 24">
                                    <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>usuario 3</td>
                    <td>Teléfono 3</td>
                    <td>email@email.com</td>
                    <td class="adress">Calle Random nº infinito</td>
                    <td>
                        <div class="table-buttons">
                            <div class="table-button delete-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                </svg>
                            </div>
                            <div class="table-button edit-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>usuario 4</td>
                    <td>Teléfono 4</td>
                    <td>email@email.com</td>
                    <td class="adress">Calle Random nº infinito</td>
                    <td>
                        <div class="table-buttons">
                            <div class="table-button delete-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                </svg>
                            </div>
                            <div class="table-button edit-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>usuario 5</td>
                    <td>Teléfono 5</td>
                    <td>email@email.com</td>
                    <td class="adress">Calle Random nº infinito</td>
                    <td>
                        <div class="table-buttons">
                            <div class="table-button delete-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                </svg>
                            </div>
                            <div class="table-button edit-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>usuario 6</td>
                    <td>Teléfono 6</td>
                    <td>email@email.com</td>
                    <td class="adress">Calle Random nº infinito</td>
                    <td>
                        <div class="table-buttons">
                            <div class="table-button delete-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                </svg>
                            </div>
                            <div class="table-button edit-button">
                                <svg  viewBox="0 0 24 24">
                                    <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>     
            </table>               
        </div>

        

        <div class="menu">
            <ul>
                <li>Users</li>
                <li>Products</li>
                <li>Grammar Posts</li>
                <li>Listenning Posts</li>
                <li>Writing Posts</li>
                <li>Reading Posts</li>
                <li>Contact</li>                    
            </ul> 
            
            
            <div class="desktop-one-column">
                <div class="column">
                    <div class="filter-section">
                        <div class="filter-icon">
                            <svg  viewBox="0 0 24 24">
                                <path  d="M11 11L16.76 3.62A1 1 0 0 0 16.59 2.22A1 1 0 0 0 16 2H2A1 1 0 0 0 1.38 2.22A1 1 0 0 0 1.21 3.62L7 11V16.87A1 1 0 0 0 7.29 17.7L9.29 19.7A1 1 0 0 0 10.7 19.7A1 1 0 0 0 11 18.87V11M13 16L18 21L23 16Z" />
                            </svg>
                        </div>                         
                        <div class="filter">                            
                            <div class="filter-selector-title">
                                    <p>Categories</p>
                            </div>
                            <div class="filter-selector">
                                <select>                                                                          
                                    <option value="" selected>All</option>
                                    <option value="">Users</option>
                                    <option value="">Products</option>
                                    <option value="">Grammar Posts</option>
                                    <option value="">Listenning Posts</option>
                                    <option value="">Writing Posts</option>
                                    <option value="">Reading Posts</option>
                                    <option value="">Contact</option>
                                </select>
                            </div>    
                        </div>                            
                    </div>                             
                </div> 
            </div>                    
        </div>
        
                                  
    <div class="desktop-one-column">  
        <div class="desktop-one-column">
            <div class="column">
                <div class="delete-layer">
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="desktop-one-column">
                                        <div class="delete-layer-title">
                                            </span>Are you sure?</span>
                                        </div>
                                        <div class="delete-confirmation">
                                            <button>Confirm</button>
                                        </div>                      
                                        <div class="delete-cancel">
                                            <button>Cancel</button>
                                        </div>
                                    </div>   
                                </div>                                
                            </div>
                            
                    </div>
                    <div class="dektop-one-column">
                        <div class="column">                           
                                               
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>                  
        <div class="edit-section"> 
            <form>
                <div class="desktop-one-column mobile-one-column">
                    <div class="column">                    
                        <div class="container--tabs">
                            <ul class="container-tabs">
                                <li class="tab tab--active" data-tab="content" >Contenido</li>
                                <li class="tab" data-tab="seo">SEO</li>
                                <li class="tab" data-tab="images">Imágenes</li>
                                <li>
                                    <div class="save-button">
                                        <svg viewBox="0 0 24 24">
                                            <path  d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                        </svg>
                                    </div>
                                </li>
                                <li>
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                                    </svg>
                                </li>
                                <li>
                                    <label class="btn-onoff">
                                        <input id="checkbox" type="checkbox" name="name" data-onoff="toggle" checked ><span></span>	
                                    </label>
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
                                        <div class="name-section">
                                            <div class="name-title">
                                                <label for="name">Name</label>
                                            </div>
                                            <div class="name-input">                                                
                                                <input type="text" name="name" placeholder="Name" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="desktop-one-column mobile-one-column">
                                    <div class="column">                    
                                        <div class="container--tabs-local">
                                            <ul class="container-tabs">
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
                                                    <input type="text" name="title" placeholder="Escribe el título">
                                                </div>
                                                <div class="content-title">
                                                    <span>Contenido</span>
                                                </div>
                                                <div class="content-input">
                                                    <textarea name="content" placeholder="Escribe el contenido"></textarea>
                                                </div>
                                            </div>
                                            <div class="content-local" data-tab="english">
                                                <div class="edit-title">
                                                    <span>Title</span>
                                                </div>
                                                <div class="title-input">
                                                    <input type="text" name="title" placeholder="Escribe el título">
                                                </div>
                                                <div class="content-title">
                                                    <span>Content</span>
                                                </div>
                                                <div class="content-input">
                                                    <textarea name="content" placeholder="Escribe el contenido"></textarea>
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
                                <span>Subir Imágenes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>    
            
        </div>
    </div>
                    
@endsection            


      
