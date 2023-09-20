const title = document.querySelector("#title");
const slug = document.querySelector("#slug");

title.addEventListener("change", async () => {
    const response = await fetch(
        "/dashboard/posts/checkSlug?title=" + title.value
    );
    const data = await response.json();
    slug.value = data.slug;
});

document.addEventListener("trix-file-accept", function (e) {
    e.preventDefault();
});

const previewImage = () => {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFFEvent) {
        imgPreview.src = oFFEvent.target.result;
    };
};
