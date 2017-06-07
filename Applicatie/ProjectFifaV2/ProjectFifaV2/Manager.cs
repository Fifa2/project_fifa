using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Security.Cryptography;
using System.Data;
using System.Data.SqlClient;
using System.Text.RegularExpressions;

namespace ProjectFifaV2
{
    class Manager
    {
        private const int SALTSIZE = 16;
        private const int HASHSIZE = 20;

        public static bool CheckNewUserUsername(string safeUsername)
        {
            // Check name contains only lower case or upper case letters, 
            // Also check it is between 1 and 20 characters long
            if (!Regex.IsMatch(safeUsername, @"^[a-zA-Z'./s]{1,20}$"))
            {
                return false;
            }
            return true;
        }

        public static bool CheckNewUserPassword(string safePassword)
        {
            // Check password contains at least one digit, one lower case 
            // letter, one uppercase letter, and is between 5 and 15 characters long
            if (!Regex.IsMatch(safePassword, @"^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,15}$"))
            {
                return false;
            }
            return true;
        }

        public static string CreateHash(string password)
        {
            byte[] salt;
            new RNGCryptoServiceProvider().GetBytes(salt = new byte[SALTSIZE]);
            Rfc2898DeriveBytes pbkdf2 = new Rfc2898DeriveBytes(password, salt);
            var hash = pbkdf2.GetBytes(HASHSIZE);

            byte[] hashBytes = new byte[SALTSIZE + HASHSIZE];
            Array.Copy(salt, 0, hashBytes, 0, SALTSIZE);
            Array.Copy(hash, 0, hashBytes, SALTSIZE, HASHSIZE);

            string hashedPassword = Convert.ToBase64String(hashBytes);

            return hashedPassword;
        }

        public static bool Verify(string password, string hashedPassword)
        {
            byte[] hashBytes = Convert.FromBase64String(hashedPassword);

            byte[] salt = new byte[SALTSIZE];
            Array.Copy(hashBytes, 0, salt, 0, SALTSIZE);

            Rfc2898DeriveBytes pbkdf2 = new Rfc2898DeriveBytes(password, salt);
            byte[] hash = pbkdf2.GetBytes(HASHSIZE);

            for (var i = 0; i < HASHSIZE; i++)
            {
                if (hashBytes[i + SALTSIZE] != hash[i])
                {
                    return false;
                }
            }
            return true;
        }
    }
}
