using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace ProjectFifaV2
{
    class Player:User
    {
        protected int amountOfMoney;
        protected bool hasWon;

        public Player(int predictions, int amountOfMoney, bool hasWon, string password, string username)
            :base(password,username)
        {
            this.amountOfMoney = amountOfMoney;
            this.hasWon = hasWon;
        }

        public int GetAmountOfMoney()
        {
            return amountOfMoney;
        }
        public void SetAmountOfMoney(int amountOfMoney)
        {
           this.amountOfMoney = amountOfMoney;
        }
        public void bet(int betAmount)
        {
            if (amountOfMoney < betAmount)
            {
                Payout payout = new Payout();
                payout.SetBet(betAmount);
            }
            else
            {
                betAmount = 0;
                MessageBox.Show("you dont have enough money to make the bet.\n please try a lower bet");
            }
        }
    }
}
