export let renderTabs = () => {

    let tabs = document.querySelectorAll('.tab');
    let contents = document.querySelectorAll(".content");

    document.addEventListener("renderProductModules", (event => {
        renderTabs();
    }), { once: true });



    tabs.forEach(tab => {

        tab.addEventListener("click", () => {

            tabs.forEach(activeTabs => {
                activeTabs.classList.remove("tab--active");
            });

            tab.classList.add("tab--active");

            contents.forEach(content => {

                content.classList.remove("content--active");

                if (content.dataset.tab == tab.dataset.tab) {
                    content.classList.add("content--active");
                }
            });
        });
    });
}






//     tabs.forEach((tab, i) => {
//         tab.addEventListener("click", () => {
//             tab.classList.add("tab--active"); 
//             if (i == 0) {
//                 tabs[0].classList.add("tab--active");
//                 tabs[1].classList.remove("tab--active");
//                 tabs[2].classList.remove("tab--active"); 
//                 contents[0].classList.add("content--active");
//                 contents[1].classList.remove("content--active"); 
//                 contents[2].classList.remove("content--active");           
//             } else if (i == 1) {
//                 tabs[1].classList.add("tab--active");
//                 tabs[0].classList.remove("tab--active");
//                 tabs[2].classList.remove("tab--active");
//                 contents[1].classList.add("content--active");
//                 contents[2].classList.remove("content--active");
//                 contents[0].classList.remove("content--active");  
//             }else if (i == 2) {
//                 tabs[2].classList.add("tab--active");
//                 tabs[0].classList.remove("tab--active");
//                 tabs[1].classList.remove("tab--active");
//                 contents[2].classList.add("content--active"); 
//                 contents[1].classList.remove("content--active");
//                 contents[0].classList.remove("content--active");  
//             }         
//         });
//     });
// }



//     tabs.forEach(tab => {

//         tabs.forEach(tab => {

//             tab.addEventListener('click', () => {

//                 tabs.forEach(tab => {
//                     tab.classList.remove('active');
//                 });
//             });
//         });
//     });
// };


//     tabs.forEach(tab => {

//         tab.addEventListener("click", () => {
//             tab.classList.toggle("tab--active"); 
//             contents.forEach(content => {
//                 content.classList.add("content--active");

//                 if (tabs = 0) {
//                     content.classList.remove("content--active");
//                 }

//             }

//             });
//             }                                       
//         ); 
//     });   
// };






//   export let renderTabs = () => {

//     const tabs = document.querySelectorAll(".tab");
//     const contents = document.querySelectorAll(".content");

//     for (let i = 0; i < tabs.length; i++) {

//       tabs[i].addEventListener("click", () => {

//         for (let j = 0; j < contents.length; j++) {
//           contents[j].classList.remove("content--active");
//         }

//         for (let jj = 0; jj < tabs.length; jj++) {
//           tabs[jj].classList.remove("tabs--active");
//         }

//         contents[i].classList.add("content--active-local");
//         tabs[i].classList.add("tabs--active");
//       });
//     }
//   }