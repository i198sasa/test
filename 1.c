#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  if( (n & 1) == 0 ){ /* 括弧をつけないと先に計算してくれないため、n&1に括弧を付けた */
    printf("%d は偶数です\n", n);
  }
  return 0;
}
