import { NgModule } from "@angular/core";
import { Route, RouterModule } from "@angular/router";
import { PostComponent } from "./post.component";

const routes: Route[] = [{
    path: '',
    pathMatch: 'full',
    component: PostComponent,
}]

@NgModule({
    imports: [RouterModule, RouterModule.forChild(routes)],
    exports: [RouterModule]
})
export class PostRouterModule {

}