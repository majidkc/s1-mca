#include<stdio.h>
#include<stdlib.h>
struct node
{
    int data;
    struct node *next;
};

int size;
struct node *newnode, *head, *temp;

void insert(){
    newnode = (struct node*)malloc(sizeof(struct node));
    newnode->next = NULL;
    printf("\nenter the element:");
    scanf("%d",&newnode->data);
    if(head == NULL)
    {
        head = newnode;
    }
    else
    {
        temp = head;
        while (temp->next != NULL)
        {
            temp = temp ->next;
        }
        temp->next = newnode;
    }
    size++;
}
void delbeg(){
    if(head == NULL)
    {
        printf("the list is empty");
    }
    else
    {
        temp = head;
        head = head->next;
        printf("\n%d deleted",temp->data);
        free(temp);
    }
    size--;
}

void delend(){
    if (head == NULL)
    {
        printf("The list is empty");
    }
    else
    {
        if(head->next == NULL)
        {
            temp = head;
            head = head->next;
            printf("\n%d is deleted",temp->data);
            free(temp);
        }
        else
        {
            struct node *prev;
            temp = head;
            while(temp->next !=NULL)
            {
                prev = temp;
                temp = temp-> next;
            }
            prev->next = NULL;
            printf("\n%dis deleted", temp->data);
            free(temp);
        }
    }
    
}

void delpos(){
    if(head == NULL)
    {
        printf("empty linked list");
    }
    else
    {
        int pos;
        printf("enter the postion:");
        scanf("%d",&pos);
        if(pos<0 || pos>size)
        {
            printf("invalid position");
        }
        else
        {
            int i = 1;
            
            temp = head;
            while(i<pos - 1)
            {
                temp = temp->next;
                i++;
            }
            struct node *delnode;
            delnode = temp->next;
            temp->next = delnode->next;
            printf("\n%d deleted",delnode->data);
            free(delnode);
        }
    }
    size--;
}

void display(){
    if(head == NULL)
    {
        printf("list is empty");
    }
    else
    {
        temp = head;
        while (temp->next !=NULL)
        {
            printf("%d", temp->data);
            temp = temp->next;
        }
        printf("%d", temp->data);    
    }
}

int main(){
    printf("\nLINKED LIST DELETE\n");
    printf("___________________________________________________________");
    printf("\n1.insert\n2.delete at begining\n3.delete at end\n4.delete at perticular position\n5.display\n6.exit");
    do
    {
        int ch;
        printf("\nenter the operation");
        scanf("%d",&ch);
        switch (ch)
        {
        case 1:
            insert();
            break;
        case 2:
            delbeg();
            break;
        case 3:
            delend();
            break;
        case 4:
            delpos();
            break;
        case 5:
            display();
            break;
        case 6:
            printf("program exited");
            return 0;
        default:
            printf("invalid choice");
            break;
        }
    } while (1);
    
}