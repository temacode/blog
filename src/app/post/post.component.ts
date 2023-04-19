import { Component, OnInit } from "@angular/core";
import { ActivatedRoute } from "@angular/router";
import { IArticle } from "app/interfaces/article.interfae";
import { BlogService } from "app/services/blog.service";
import { first } from "rxjs";

@Component({
    selector: 'post',
    templateUrl: './post.component.html',
})
export class PostComponent implements OnInit {
    isLoading: boolean = true;
    public postData: IArticle;
    public postId: number;


    constructor(private readonly activatedRoute: ActivatedRoute, private readonly blogService: BlogService) {
        this.activatedRoute.params.pipe(first()).subscribe(params => {
            this.postId = Number(params['id']);
        });
    }

    ngOnInit(): void {
        const postData = this.blogService.getPostById(this.postId);

        if (!postData) {
            return;
        }


        this.postData = postData;
        this.isLoading = false;
    }
}