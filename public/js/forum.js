class Forum {
    constructor() {
        console.log("kokotina");
        this.getTopics();
    }

    async getTopics() {
        console.log("kokotina");
        try {

            let response = await fetch('/article/topics');
            let data = await response.json();

            var list = document.getElementById('topics-list');
            data.forEach((article) => {
                var link = document.createElement('a');
                link.href = '#';
                link.innerText = article.title;
                list.append(link);
                list.append(document.createElement('br'));
            });
        } catch (e) {
            console.error('Error: ' + e.message);
        }
    }

}

document.addEventListener('DOMContentLoaded', () =>{
   var forum = new Forum();
});
