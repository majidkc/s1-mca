#include <stdio.h>
#include <stdlib.h>

struct node
{
    int data;
    struct node *left, *right;
};
struct node *newnode;
struct node *create(int val)
{
    newnode = (struct node*)malloc(sizeof(struct node));
    newnode->data = val;
    newnode->left = NULL;
    newnode->right = NULL;
    return newnode;
}

struct node *insert(struct node *Root, int val)
{
    if (Root == NULL)
    {
        return create(val);
    }
    else if (val > Root->data)
    {
        Root->right = insert(Root->right, val);
    }
    else
    {
        Root->left = insert(Root->left, val);
    }
    return Root;
}

void display(struct node *Root)
{
    if (Root != NULL)
    {
        display(Root->left);
        printf("%d", Root->data);
        display(Root->right);
    }
}

int main()
{
    int val;
    int size;
    int ch;
    struct node *root = NULL;
    printf("1.insertion\n2.display\n3.exit\n");
    do
    {

        printf("\neneter the choice");
        scanf("%d", &ch);
        switch (ch)
        {
        case 1:
            printf("enter the data");
            scanf("%d", &val);
            if (root == NULL)
            {
                root = create(val);
            }
            else
            {
                insert(root, val);
            }
            break;
        case 2:
            display(root);
            break;
        case 3:
            printf("program exited!!");
            return 0;
        default:
            break;
        }
    } while (1);
}