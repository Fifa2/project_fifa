using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProjectFifaV2
{
    class User
    {
        protected string password;
        protected string username;

        public User(string password, string username)
        {
            this.password = password;
            this.username = username;
        }
    }
}
    