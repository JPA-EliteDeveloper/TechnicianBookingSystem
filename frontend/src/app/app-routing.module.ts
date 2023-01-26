import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { EditArticleComponent } from './edit-article/edit-article.component';
import { NewArticleComponent } from './new-article/new-article.component';
import { ArticlesComponent } from './articles/articles.component';
import { HomeComponent } from './home/home.component';
import { RegisterComponent } from './register/register.component';
import { LoginComponent } from './login/login.component';
import { ApplyComponent } from './apply/apply.component';
import { LandingPageComponent } from './landing-page/landing-page.component';
import { CustomerComponent } from './customer/customer.component';
import { CustomerRegisterComponent } from './customer-register/customer-register.component';
import { AboutUsComponent } from './about-us/about-us.component';
import { SettingsTechnicianComponent } from './settings-technician/settings-technician.component';
import { RequestTechnicianComponent } from './request-technician/request-technician.component';



const routes: Routes = [
  {
    path: 'add', component: NewArticleComponent
  },
  {
    path: '', component: LandingPageComponent
  },
  {
    path: 'login', component: LoginComponent
  },
  {
    path: 'register/1', component: RegisterComponent
  },
  {
    path: 'register/2', component: CustomerRegisterComponent
  },
  {
    path: 'edit/:customerId', component: EditArticleComponent
  },
  {
    path: 'apply', component: ApplyComponent
  },
  {
    path: 'transactions', component: ArticlesComponent
  },
  {
    path: 'home/1', component: HomeComponent
  },
  {
    path: 'home/2', component: CustomerComponent
  },
  {
    path: 'about-us', component: AboutUsComponent
  },
  {
    path: 'settings/1', component: SettingsTechnicianComponent

  }
  ,
  {
    path: 'request/1', component: RequestTechnicianComponent

  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
