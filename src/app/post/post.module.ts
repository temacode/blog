import { NgModule } from "@angular/core";
import { PostComponent } from "./post.component";
import { PostRouterModule } from "./post-router.module";
import { CommonModule } from "@angular/common";

@NgModule({
    imports: [CommonModule, PostRouterModule],
    declarations: [PostComponent]
})
export class PostModule { }