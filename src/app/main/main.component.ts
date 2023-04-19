import { Component } from "@angular/core";
import { BlogService } from "../services/blog.service";
import { BehaviorSubject } from "rxjs";
import { IArticle } from "../interfaces/article.interfae";
import { ImageService } from "../services/image.service";

@Component({
    selector: 'main',
    templateUrl: './main.component.html'
})
export class MainComponent {
    public readonly blogData$: BehaviorSubject<IArticle[]>;

    constructor(private readonly blogService: BlogService, private readonly imageSevice: ImageService) {
        this.blogData$ = this.blogService.blogData$;
    }
}