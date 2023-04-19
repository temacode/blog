import { Injectable } from "@angular/core";
import { BehaviorSubject } from "rxjs";
import { blogData } from './data/data'
import { IArticle } from "app/interfaces/article.interfae";

@Injectable()
export class BlogService {
    public readonly blogData$ = new BehaviorSubject(blogData);

    getPostById(id: number): IArticle | null {
        const data = this.blogData$.getValue().find((x) => x.id === id);

        return data ?? null;
    }
}