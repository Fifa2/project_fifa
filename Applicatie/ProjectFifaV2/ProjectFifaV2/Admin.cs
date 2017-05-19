using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProjectFifaV2
{
    class Admin:User
    {
        protected bool admin = false;

        public Admin(bool admin,string password,string username)
            :base(password,username)
        {
            this.admin = admin;
        }

    }
}
