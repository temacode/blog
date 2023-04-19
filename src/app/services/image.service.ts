import { Injectable } from "@angular/core";
import { HttpClient } from "@angular/common/http";
import { Observable, map } from "rxjs";

@Injectable()
export class ImageService {
    constructor(private readonly httpClient: HttpClient) { }

    getImageFromAssets(postId: number, imageName: string): Observable<Blob> {
        console.log(`/assets/blog/post-${postId}/${imageName}`);
        return this.httpClient.get(`/assets/blog/post-${postId}/${imageName}`, { responseType: 'blob' });
    }

    createImageFromBlob(image: Blob) {
        let reader = new FileReader();

        reader.addEventListener("load", () => {
            return reader.result;
        }, false);

        if (image) {
            reader.readAsDataURL(image);
        }
    }
}