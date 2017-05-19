using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApplication1
{
    class Program
    {
        static void Main(string[] args)
        {


            int[] PoolA = new int[4];
            PoolA[0] = 1;
            PoolA[1] = 2;
            PoolA[2] = 3;
            PoolA[3] = 4;

            foreach (var Team in PoolA)
            {
                foreach (var Team2 in PoolA)
                {
                    if (true &&(Team != Team2))
                    {
                        Console.WriteLine("{0}, {1}", Team, Team2);
                    }
                }
            }
            Console.ReadLine();
        }

    }
}
