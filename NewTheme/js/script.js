function ScaleAndUnscaleImageAfter2Seconds() {
    document.addEventListener('DOMContentLoaded', () => {
        let gallery = document.querySelectorAll(".wp-block-gallery .wp-block-image");
        let h2s = document.querySelectorAll(".post h2");
        gallery.forEach(image => {
            image.addEventListener("mouseover", async () => {
                image.style.cursor = "Pointer";
                image.classList.remove("image-unscaled");
                image.classList.add("image-scaled");
                await wait(2000);
                image.classList.remove("image-scaled");
                image.classList.add("image-unscaled");
            });
        });
    });
}

function wait(ms) {
    return new Promise((resolve) => {
        setTimeout(() => {
            resolve("resolved");
        }, ms);
    });
}

ScaleAndUnscaleImageAfter2Seconds();


//FAQ
function ShowFaqAndDelete(){
    let FAQ_questions = document.querySelectorAll('.faq-ul li');
    let index = 0;
    FAQ_questions.forEach(FQ => {
        index += 1;
        if(index % 2 == 0){
            //
        }
        else{
            FQ.addEventListener("click" , async () => {
                let FQSibling = FQ.nextElementSibling;
                FQSibling.style.display = "block";
                await wait(5000);
                FQSibling.style.display = "none";
            })
        }
    });
}
ShowFaqAndDelete();



//Rest API
// wp.api.loadPromise.done(function() {
//     const allPosts = new wp.api.collection.Posts();
//     allPosts.fetch().done(
//         function(posts){
//             posts.forEach(post => {
//                 console.log(post.title.rendered + "\n");
//             })
//         }
//     );
// }) WERSJA NIE DZIALAJACA;
//WERSJA DZIALAJACAC:\Users\Dell\Documents\moj_projekt_php\wp-content\themes\FourCustomThemes\NewTheme>wp-env start
document.addEventListener('DOMContentLoaded', () => {
    fetch('http://localhost:8000/wp-json/wp/v2/posts')
        .then(response => {
            if(!response.ok){
                console.log("Blad fetcha")
            }
            else{
                return response.json();
            }
        })
        .then(posts => {
            posts.forEach(post => {
                console.log(post.title.rendered + "\n");
            })
        })
        .catch(error => {
            console.log(error);
        })
        
    })

